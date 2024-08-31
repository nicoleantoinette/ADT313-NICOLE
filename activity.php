    <?php
    $studentID=0;

    $table = array(
        "header"=>array(
            "studentId",
            "FirstName",
            "Middlename",
            "lastname",
            "section",
            "course",
            "yearlevel"
        ),
        "body"=>[
           
            array(
               
            "FirstName"=>"FirstName",
            "Middlename"=>"Middlename",
            "lastname"=>"lastname",
            "section"=>"section",
            "course"=>"course",
            "yearlevel"=>"yearlevel"
            ),
            array(
                "FirstName"=>"FirstName",
                "Middlename"=>"Middlename",
                "lastname"=>"lastname",
                "section"=>"section",
                "course"=>"course",
                "yearlevel"=>"yearlevel"
            ),
            array(
            "FirstName"=>"FirstName",
            "Middlename"=>"Middlename",
            "lastname"=>"lastname",
            "section"=>"section",
            "course"=>"course",
            "yearlevel"=>"yearlevel"
            ),
            array(
                "FirstName"=>"FirstName",
                "Middlename"=>"Middlename",
                "lastname"=>"lastname",
                "section"=>"section",
                "course"=>"course",
                "yearlevel"=>"yearlevel"
            ),
            array(
            "FirstName"=>"FirstName",
            "Middlename"=>"Middlename",
            "lastname"=>"lastname",
            "section"=>"section",
            "course"=>"course",
            "yearlevel"=>"yearlevel"
            ),
            array(
                "FirstName"=>"FirstName",
                "Middlename"=>"Middlename",
                "lastname"=>"lastname",
                "section"=>"section",
                "course"=>"course",
                "yearlevel"=>"yearlevel"
                ),
            array(
            "FirstName"=>"FirstName",
            "Middlename"=>"Middlename",
            "lastname"=>"lastname",
            "section"=>"section",
            "course"=>"course",
            "yearlevel"=>"yearlevel"
            ),
            array(
                "FirstName"=>"FirstName",
                "Middlename"=>"Middlename",
                "lastname"=>"lastname",
                "section"=>"section",
                "course"=>"course",
                "yearlevel"=>"yearlevel"
            ),
            array(
                "FirstName"=>"FirstName",
                "Middlename"=>"Middlename",
                "lastname"=>"lastname",
                "section"=>"section",
                "course"=>"course",
                "yearlevel"=>"yearlevel"
                ),
            array(
            "FirstName"=>"FirstName",
            "Middlename"=>"Middlename",
            "lastname"=>"lastname",
            "section"=>"section",
            "course"=>"course",
            "yearlevel"=>"yearlevel"
            ),
            array(
                "FirstName"=>"FirstName",
                "Middlename"=>"Middlename",
                "lastname"=>"lastname",
                "section"=>"section",
                "course"=>"course",
                "yearlevel"=>"yearlevel"
            )
        ]
    );
    $studentID=0;
    


    echo "<table border ='5'>";
    echo "<tr>";

    foreach ($table["header"] as $header){
        echo "<th>$header</th>";
    }
    echo "</tr>";
    for ($x = 0; $x <= 10; $x++) {
        $studentID=$x;
       }
    foreach ($table["body"] as $row){
        echo "<tr>";
         echo "<td>".($studentID)."</td>";
        foreach ($table["header"] as $header){
            if ($header !== "studentId"){
            $x = str_replace(' ', '', $header);
            echo "<td>{$row[$x]}</td>";
            }
        }
        
        echo "</tr>";

    }
    echo "<table>";
    for ($x = 0; $x <= 10; $x++) {
   $studentID=$x;
  }
    ?>