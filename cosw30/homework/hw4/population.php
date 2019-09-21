<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Most Populous Cities (USA 2017)</title>
        <link rel="stylesheet" href="stylesheet.css">
    </head>
    
    <body>
        
        <div class="greenBkgd">
        <h1 id="headingUnder">Population Table Manipulation</h1>
        <!--First Table -->
        <h3 class="tableHeadings">Table Arranged By Population</h3>
        
        <table class="popTable">
        <thead class="underlineText">
            <tr>
                <th colspan="3">
                    The 15 Most Populous Cities as of July 1, 2017
                </th>
                
            </tr>
        </thead>
        
        <tr>
            <th>Rank</th>
            <th>City, State</th>
            <th>2017 Total Population</th>
        </tr>
    
        <tbody>
        
        

    <?php
        
        //***********CREATE ARRAY***************
        $cityStatePop = ["New York, New York" => "8,622,698", 
        "Los Angeles, California" => "3,999,759", 
        "Chicago, Illinois" => "2,716,450", "Houston, Texas" => "2,312,717", 
        "Phoenix, Arizona" => "1,626,078", "Philadelphia, Pennsylvania" => "1,580,863", 
        "San Antonia,Texas" => "1,511,946", "San Diego, California"=>"1,419,516", 
        "Dallas, Texas" => "1,341,075", "San Jose, California" => "1,035,317",
        "Austin, Texas" => "950,715", "Jacksonville, Florida" => "892,062", 
        "San Francisco, California" => "884,363", "Columbus, Ohio" => "879,170",
        "Fort Worth, Texas" => "874,168"];
        
    
        //***********CREATE TABLES***************
        //first table in order by population
        
        
        $i = 1;
        foreach($cityStatePop as $cityState => $pop) {
            echo "<tr><td>" . $i++ . "</td><td>$cityState</td><td>$pop</td></tr>\n";
        }
    
      
        
        //****END TABLE 1******
    
    ?>
    
    
          </tbody>
        </table>
    
    
    
     <!--second table in alphabetical order by city name-->
        <h3 class="tableHeadings">Table Arranged In Alphabetical Order By City</h3>
        <table class="popTable">
            <thead class="underlineText">
                <tr>
                    <th colspan="3">
                        The 15 Most Populous Cities as of July 1, 2017
                    </th>
                    
                </tr>
            </thead>
            
            <tr>
                <th>Rank</th>
                <th>City, State</th>
                <th>2017 Total Population</th>
            </tr>
        
            <tbody>
    
    
    <?php
    
        //****START TABLE 2******
        //second table in alphabetical order by city name
       
        
        //sort array alphabetically - based on keys or city name
        ksort($cityStatePop);
    
        $j = 1;
        foreach($cityStatePop as $cityState => $pop) {
            echo "<tr><td>" . $j++ . "</td><td>$cityState</td><td>$pop</td></tr>\n";
        }
        
    
    ?>
    
            </tbody>
        </table>

        
        <br>
        
        <button><a href="quote.html">Quote Form</a></button>
    
    </div>
    </body>
    
</html>