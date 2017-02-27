<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<?php
  if(isset($_POST['fontstyle'], $_POST['fontsize'], $_POST['fontcolor']))
    {
     $select1 = $_POST['fontstyle'];
      switch ($select1) 
    	{
         case 'fstvalue1':
         $_POST['fontstyle']="Times New Roman";
         break;
         case 'fstvalue2':
         $_POST['fontstyle']="Arial";
              break;
              case 'fstvalue3':
              $_POST['fontstyle']="Georgia";
              break;
              case 'fstvalue4':
              $_POST['fontstyle']="Cursive";
              break;
              case 'fstvalue5':
              $_POST['fontstyle']="Fantasy";
              break;
			  case 'fstvalue6':
              $_POST['fontstyle']="Agency FB";
              break;
              case 'fstvalue7':
              $_POST['fontstyle']="Comic Sans MS";
              break;
              case 'fstvalue8':
              $_POST['fontstyle']="Sans-serif";
        }
    }
?>
<?php
  if(isset($_POST['fontstyle'], $_POST['fontsize'], $_POST['fontcolor']))
  {
   $select2 = $_POST['fontsize'];
   switch ($select2) 
    {
     case 'fszvalue1':
     $_POST['fontsize']="15px";
     break;
     case 'fszvalue2':
     $_POST['fontsize']="20px";
     break;
     case 'fszvalue3':
     $_POST['fontsize']="25px";
     break;
     case 'fszvalue4':
     $_POST['fontsize']="30px";
     break;
     case 'fszvalue5':
     $_POST['fontsize']="35px";
     break;
	}
  }
?>
<?php
  if(isset($_POST['fontstyle'], $_POST['fontsize'], $_POST['fontcolor']))
  {
   $select3 = $_POST['fontcolor'];
   switch ($select3) 
	{
     case 'fcvalue1':
     $_POST['fontcolor']="Red";
     break;
     case 'fcvalue2':
     $_POST['fontcolor']="Lime";
     break;
     case 'fcvalue3':
     $_POST['fontcolor']="Purple";
     break;
     case 'fcvalue4':
     $_POST['fontcolor']="Aqua";
     break;
     case 'fcvalue5':
     $_POST['fontcolor']="Teal";
     break;
    }
  }
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type"
              content="text/html; charset=UTF-8">
        <title>Text Processor</title>
        <style>
         p
     	  {
		   font-family: <?php echo $_POST["fontstyle"]; ?>;
           font-size: <?php echo $_POST["fontsize"]; ?>;
		   color: <?php echo $_POST["fontcolor"]; ?>;
		  }		   
        </style>
    </head>
    <body>
	   <p>
       <?php
        $fontstyle = $_POST["fontstyle"];
        $fontsize = $_POST["fontsize"];
        $fontcolor = $_POST["fontcolor"];
        $text = $_POST["text"];
        echo "$text";
       ?>
       </p>
    </body>
</html>