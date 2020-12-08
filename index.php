<!DOCTYPE html>
<html>

<head>
    <style>
        * {

                font-size: 1rem;

        }
        
        
        a:link , a:visited {
            
            background-color: white;
            color: #4661b9;
            border: 2px solid #4661b9;
            padding: 10px 20px;
            text-decoration: none;
            text-align: center;
            display: inline;
           font-size: 110%;
        } 
        
        a:hover, a:active{
            
            background-color: #4661b9;
            color: white;
            
        }
        
        .box1 a{
            
            background-color: #4661b9;
            border-color: #4661b9;
            color: white; 
            text-transform: capitalize;
        }
        .box1 a:hover{
            background-color: white;
            color: #4661b9; 
        }

        .box {

            display: flex;
            width: 100%;
            justify-content: center;
            align-items: center;
            height: auto;
            font-size: 130%;

        }
        .box1{
            display: flex;
            width: 100%;
            justify-content: center;
            align-content: center;
           
            
        }


        #title {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            min-width: 60%;
            min-height: 60%;
           

        }

        #title td,
        #title th {
            border: 1px solid #ddd;
            padding: 8px;

        }

        #title th {
            text-align: center;
            font-size: 130%;
        }

        #title tr {

            line-height: 2.5rem;
        }



        #title tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #title tr:hover {
            background-color: #ddd;
        }

        #title th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #4661b9;
            color: white;
        }
        
        
        
             
        
        
    </style>
</head>

<body>
  
  
  
  
<?php  
  // Principles of Management  
       $POM_id   = '92040422533';
       $POM_pass = 'SW-PM';
       $POM_link = null;
    
  // Probability and Statistics
       $PAS_id   = '93697016201';
       $PAS_pass = '870tpY';
       $PAS_link = null;
  
  // communication Skills
       $CS_id    = null;
       $CS_pass  = null;
       $CS_link  = null;
  
  // Digital Logic Design
       $DLD_id   = null;
       $DLD_pass = null;
       $DLD_link = null;
    
  // Discrete Structure 
       $DS_id    = null;
       $DS_pass  = null;
       $DS_link  = null;
    
      ?>  
  
  
  
  <div class="box1"><h1>Let's Create best memories in this Precious time.</h1></div>
  
   <div class="box1" style='padding-top: 20px;'>
   <a href="58edcf3f-8eb4-4f36-ab7f-b9623ac87d73.jpg" target="_blank">View Timetable</a>
   <a href="https://drive.google.com/drive/folders/17JXWJmWmzP7jSuIaNdUtJjCgWjmpf_A9?usp=sharing" target="_blank">Course Material</a>
   <a href="https://forms.gle/qP6KQPd4dazgGCpQ7" target="_blank">Suggestion/Ideas</a></div>
   <br>
   
    <div class="box">
        <table id="title">
            <tr>
                <th>Subject </th>
                <th> ID / Pass </th>
                <th> Join </th>
            </tr>
 
           
             <tr>
                <td>Object Oriented Programming</td>
                <td>Visit YT channel</td>
                <td><a href="https://www.youtube.com/channel/UC0zVUfltHR24ZuAVG97PTUg">Youtube</a></td>
            </tr>
       
       
        <?php     if(isset($POM_id)){  ?>            
            <tr>
                <td>Principles of Management</td>
                <td><strong>ID: </strong><?php echo $POM_id; ?><br><strong>Pass: </strong><?php echo $POM_pass; ?></td>
                <td><?php if(isset($POM_link)){ ?><a href="<?php echo $POM_link; ?>">Join</a><?php } ?> </td>
            </tr>
        <?php }  
            
        if(isset($PAS_id)){  ?>            
            <tr>
                <td>Probability and Statistics</td>
                <td><strong>ID: </strong><?php echo $PAS_id; ?><br><strong>Pass: </strong><?php echo $PAS_pass; ?></td>
                <td><?php if(isset($PAS_link)){ ?><a href="<?php echo $PAS_link; ?>">Join</a><?php } ?> </td>
            </tr>
        <?php }   
            
        
        if(isset($CS_id)){  ?>            
            <tr>
                 <td>Communication SKills</td>
                <td><strong>ID: </strong><?php echo $CS_id; ?><br><strong>Pass: </strong><?php echo $CS_pass; ?></td>
                <td><?php if(isset($CS_link)){ ?><a href="<?php echo $CS_link; ?>">Join</a><?php } ?> </td>
            </tr>
        <?php }  
            
            
        if(isset($DLD_id)){  ?>            
            <tr>
                 <td>Digital Logic Design</td>
                <td><strong>ID: </strong><?php echo $DLD_id; ?><br><strong>Pass: </strong><?php echo $DLD_pass; ?></td>
                <td><?php if(isset($DLD_link)){ ?><a href="<?php echo $DLD_link; ?>">Join</a><?php } ?> </td>
            </tr>
        <?php }     
            
            
        if(isset($DS_id)){  ?>            
            <tr>
                 <td>Digital Logic Design</td>
                <td><strong>ID: </strong><?php echo $DS_id; ?><br><strong>Pass: </strong><?php echo $DS_pass; ?></td>
                <td><?php if(isset($DS_link)){ ?><a href="<?php echo $DS_link; ?>">Join</a><?php } ?> </td>
            </tr>
        <?php }     ?>                                
          
           
        </table>

    </div>

     


</body>

</html>