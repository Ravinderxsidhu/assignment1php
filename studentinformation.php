<!doctype html>
<html lang="en">
    <head>
        <title>Student Info</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <header>
        <div class="logo"> Information</div>
        <nav>
        <li><a href="studentinformation.php">Studentform</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <h1>Student information</h1>
        <form action="C:\xampp\htdocs\week5\studentinformation.php" method="post">
            <label for="fname">first name</label>
            <input type="text" name="fname" id="fname"><br/>
            <label for="lname">Last Name</label>
            <input type="text" name="lname" id="lname"><br/>
            <label for="id">ID</label>
            <input type="text" name="id" id="id"><br/>
            <label for="dob">Date of Birth</br>
            <input type="number" name="dob" id="dob"></br>
            <label for="scoreinenglish">Score in English</label>
            <input type="text" name="scoreinEnglish" id="scoreinEnglish"></br>
            <label for="Scoreinsocialstudies">Score in SST </label>
            <input type="text" name="Scoreinsocialstudies" id="Scoreinsocialstudies"></br>
            <label for="percentage">percentage</label>
            <input type="text" name="percentage" id="percentage"></br>
            <button type="submit">SUBMIT</button>
        </form>

        <?php
        if($_SERVER['REQUEST_METHOD']='POST')
        {
            $fname=$_POST['fname'];
            $lname=$_POST['lname'];
             $id=$_POST['id'];
             $dob=$_POST['dob'] ;
             $scoreinenglish=$_POST['scoreinenglish'];
             $Scoreinsocialstudies=$_POST['Scoreinsocialstudies'];
             $percentage=$_POST['percentage'] ;
            //Database Connectivity
            $servername="localhost";
            $username="root";
            $password="";
            $database="students";

            //creating a connection

            $conn=mysqli_connect($servername, $username, $password, $database);

            //die if connection failed
            if(!$conn)
            {
                die("Sorry, connection failed!!".mysqli_connect_error());
            }
            else
            {
                //submit the insertion queries/data to database
               $sql= "INSERT INTO `students`  (`fname`, `lname`, `ID`, `dob`, `scoreinenglish`, `Scoreinsocialstudies`, `percentage`) VALUES (`fname`, `lname`, `ID`, `dob`, `scoreinenglish`, `Scoreinsocialstudies`, `percentage`)";
               $result=mysqli_query($conn,$sql);
                if($result)
                {
                    echo "Data entered successfully";

                }
                else{
                    echo "Data not Entered due to  ".mysqli_error($conn);
                }
            }

        }



        ?>
        </main>
        <footer>
        &copy; 2023 Your Result
    </footer>
    </body>
</html>



    