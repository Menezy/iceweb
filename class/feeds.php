<?php  
	
	/**
	 * 
	 */
	class Feeds
	{
		public $conn;
		public function __construct($conn)
		{
			$this->conn = $conn ;
		}
		public function time_elapsed_string($datetime, $full = false)
	    {
	      $now = new DateTime;
	      $ago = new DateTime($datetime);
	      $diff = $now->diff($ago);

	      $diff->w = floor($diff->d / 7);
	      $diff->d -= $diff->w * 7;

	      $string = array(
	          'y' => 'year',
	          'm' => 'month',
	          'w' => 'week',
	          'd' => 'day',
	          'h' => 'hour',
	          'i' => 'min',
	          's' => 'sec',
	      );
	      foreach ($string as $k => &$v) {
	          if ($diff->$k) {
	              $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
	          } else {
	              unset($string[$k]);
	          }
	      }

	      if (!$full) $string = array_slice($string, 0, 1);
	      return $string ? implode(', ', $string) . ' ago' : 'Just now';
	    }
	    public function get_web_path($file_system_path)
	    {
	      return str_replace($_SERVER['DOCUMENT_ROOT'], '', $file_system_path);
	    }
		public function getFeeds()
		{
			// Connection Query
			$conn = $this->conn ;
			// Grab Data
			$grabFeeds = "SELECT * FROM posts ORDER BY id DESC";
			$res = mysqli_query($conn, $grabFeeds);
			if (mysqli_num_rows($res) > 0) {
				while ($row = mysqli_fetch_array($res)) {
					echo
					'<div class="col-md-4">
                        <div class="blog-cont">
                            <img src="admin/'. $this->get_web_path($row['post_featuredimage']) .'" alt="" class="img-fluid">
                            <span>'. $this->time_elapsed_string($row['post_time']) .'</span>
                            <span class="text-right" style="float:right;" name="author">'. $row['post_author'] .'</span>
                            <h5>'. $row['post_title'] .'</h5>
                            <p>'. $row['post_desc'] .'</p>
                            <p></p>
                            <a href="read/'. $row['id'] .'">Read more <i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>';
				}
			}
		}
		public function newsDataAPI()
		{
			$conn = $this->conn;
			// $userID
			$grab = "SELECT * FROM posts";
			$req = mysqli_query($conn, $grab);
			while ($res = mysqli_fetch_assoc($req)) {
				echo json_encode($res);
			}
		}
		public function grabNewsData($newsID)
		{
			$conn = $this->conn;
			// $userID
			$grab = "SELECT * FROM posts WHERE id='$newsID'";
			$req = mysqli_query($conn, $grab);
			if (mysqli_num_rows($req) > 0) {
				$res = mysqli_fetch_assoc($req);
				return json_encode($res);
			}
		}
	}