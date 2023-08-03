<html>
   
   <head>
      <title>Sending HTML email using PHP</title>
   </head>
   
   <body>
      
      <?php
         $to = "jay412003@gmail.com";
         $subject = "This is subject";
         
         $message = "<b>This is HTML message.</b>";
         $message .= "<h1>This is headline.</h1>";
         
         $header = "From:abc@somedomain.com \r\n";
         $header .= "Cc:afgh@somedomain.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
            echo "Message sent successfully...";
         }else {
            echo "Message could not be sent...";
         }
      ?>
      
   </body>
</html>
Sending attachments with email
To send an email with mixed content requires to set Content-type header to multipart/mixed. Then text and attachment sections can be specified within boundaries.

A boundary is started with two hyphens followed by a unique number which can not appear in the message part of the email. A PHP function md5() is used to create a 32 digit hexadecimal number to create unique number. A final boundary denoting the email's final section must also end with two hyphens.

<?php
   // request variables // important
   $from = $_REQUEST["from"];
   $emaila = $_REQUEST["emaila"];
   $filea = $_REQUEST["filea"];
   
   if ($filea) {
      function mail_attachment ($from , $to, $subject, $message, $attachment){
         $fileatt = $attachment; // Path to the file
         $fileatt_type = "application/octet-stream"; // File Type 
         
         $start = strrpos($attachment, '/') == -1 ? 
            strrpos($attachment, '//') : strrpos($attachment, '/')+1;
				
       //  $fileatt_name = substr($attachment, $start, 
          //  strlen($attachment)); // Filename that will be used for the 
          //  file as the attachment 
         
         $email_from = $from; // Who the email is from
         $subject = "New Attachment Message";
         
         $email_subject =  $subject; // The Subject of the email 
         $email_txt = $message; // Message that the email has in it 
         $email_to = $to; // Who the email is to
         
         $headers = "From: ".$email_from;
         $file = fopen($fileatt,'rb'); 
         $data = fread($file,filesize($fileatt)); 
         fclose($file); 
         
         $msg_txt="\n\n You have recieved a new attachment message from $from";
         $semi_rand = md5(time()); 
         $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x"; 
         $headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . "
            boundary=\"{$mime_boundary}\"";
         
         $email_txt .= $msg_txt;
			
         $email_message .= "This is a multi-part message in MIME format.\n\n" . 
            "--{$mime_boundary}\n" . "Content-Type:text/html; 
            charset = \"iso-8859-1\"\n" . "Content-Transfer-Encoding: 7bit\n\n" . 
            $email_txt . "\n\n";
				
         $data = chunk_split(base64_encode($data));
         
         $email_message .= "--{$mime_boundary}\n" . "Content-Type: {$fileatt_type};\n" .
            " name = \"{$fileatt_name}\"\n" . //"Content-Disposition: attachment;\n" . 
            //" filename = \"{$fileatt_name}\"\n" . "Content-Transfer-Encoding: 
            base64\n\n" . $data . "\n\n" . "--{$mime_boundary}--\n";
				
         $ok = mail($email_to, $email_subject, $email_message, $headers);
         
         if($ok) {
            echo "File Sent Successfully.";
            unlink($attachment); // delete a file after attachment sent.
         }else {
            die("Sorry but the email could not be sent. Please go back and try again!");
         }
      }
      move_uploaded_file($_FILES["filea"]["tmp_name"],
         'temp/'.basename($_FILES['filea']['name']));
			
      mail_attachment("$from", "youremailaddress@gmail.com", 
         "subject", "message", ("temp/".$_FILES["filea"]["name"]));
   }
?>

<html>
   <head>
      
      <script language = "javascript" type = "text/javascript">
         function CheckData45() {
            with(document.filepost) {
               if(filea.value ! = "") {
                  document.getElementById('one').innerText = 
                     "Attaching File ... Please Wait";
               }
            }
         }
      </script>
      
   </head>
   <body>
      
      <table width = "100%" height = "100%" border = "0" 
         cellpadding = "0" cellspacing = "0">
         <tr>
            <td align = "center">
               <form name = "filepost" method = "post" 
                  action = "file.php" enctype = "multipart/form-data" id = "file">
                  
                  <table width = "300" border = "0" cellspacing = "0" 
                     cellpadding = "0">
							
                     <tr valign = "bottom">
                        <td height = "20">Your Name:</td>
                     </tr>
                     
                     <tr>
                        <td><input name = "from" type = "text" 
                           id = "from" size = "30"></td>
                     </tr>
                     
                     <tr valign = "bottom">
                        <td height = "20">Your Email Address:</td>
                     </tr>
                     
                     <tr>
                        <td class = "frmtxt2"><input name = "emaila"
                           type = "text" id = "emaila" size = "30"></td>
                     </tr>
                     
                     <tr>
                        <td height = "20" valign = "bottom">Attach File:</td>
                     </tr>
                     
                     <tr valign = "bottom">
                        <td valign = "bottom"><input name = "filea" 
                           type = "file" id = "filea" size = "16"></td>
                     </tr>
                     
                     <tr>
                        <td height = "40" valign = "middle"><input 
                           name = "Reset2" type = "reset" id = "Reset2" value = "Reset">
                        <input name = "Submit2" type = "submit" 
                           value = "Submit" onClick = "return CheckData45()"></td>
                     </tr>
                  </table>
                  
               </form>
               
               <center>
                  <table width = "400">
                     
                     <tr>
                        <td id = "one">
                        </td>
                     </tr>
                     
                  </table>
               </center>
               
            </td>
         </tr>
      </table>
      
   </body>
</html>