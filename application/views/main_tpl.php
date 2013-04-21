<?php 
	$this->load->view('password_protect');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Phi Beta Epsilon Brothers Panel</title>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
	<style type="text/css">
		body {
		 background-color: #fff;
		 margin: 40px;
		 font-family: Lucida Grande, Verdana, Sans-serif;
		 font-size: 14px;
		 color: #4F5155;
		}

		a {
		 color: #003399;
		 background-color: transparent;
		 font-weight: normal;
		}

		h1 {
		 color: #444;
		 background-color: transparent;
		 border-bottom: 1px solid #D0D0D0;
		 font-size: 16px;
		 font-weight: bold;
		 margin: 24px 0 2px 0;
		 padding: 5px 0 6px 0;
		}

		code {
		 font-family: Monaco, Verdana, Sans-serif;
		 font-size: 12px;
		 background-color: #f9f9f9;
		 border: 1px solid #D0D0D0;
		 color: #002166;
		 display: block;
		 margin: 14px 0 14px 0;
		 padding: 12px 10px 12px 10px;
		}
	</style>

</head>
<body>
<h2>Phi Beta Epsilon Brothers Panel</h2>
<?php 
	$this->load->view($page);
?>
<a href="?logout">Logout</a>
</body>
</html>