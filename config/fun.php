<? 

	class fun {
		
		function __construct() {}



		



		






		







		// mall send
		public static function send_mail($mail, $txt) {
			$from = "info@aruacademy.kz";
			$subject = "Aru Academy";
			$headers = "From:" . $from. "\r\n";
			$headers .= "Content-type:text/html;charset=UTF-8";
			$mess = "<html>
							<head><title>$subject</title></head>
							<body>
								<div><b>$txt<b></div>
							</body>
						</html>";
			return mail($mail, $subject, $mess, $headers);
		}

















	}