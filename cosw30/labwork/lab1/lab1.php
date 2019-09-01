<!doctype html>
    <html>
        <head>
            <title>Labwork 1: Hello World</title>
            <style>
                html {
                    background-color: #333366;
                    color: #CCFFFF;
                    padding: 0em 7em;
                }
                body {
                    font-family: 'Raleway', sans-serif;
                }
                h1 {
                    text-align: center;
                    font-size: 3em;
                    font-family: 'Dancing Script', cursive;
                }
                a {
                    background-color: #CCFFFF;
                    padding: 0.1em;
                }
            </style>
            <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Raleway&display=swap" rel="stylesheet">

        </head>
        <body>
            <h1>A Little Bit About Me</h1>
                <p>Hi! I'm Elisa!  I am a student at Long Beach City College (LBCC).  I am currently working
                on earning my Associate's Degree in Web Development.  I had no previous experience in Web Development before starting classes in June 2018.
                Before attending LBCC, I earned my Bachelor's Degree in Animal Health Science.  I have worked in the veterinary field for the past 10 
                years.  I have a Pomeranian named Apollo.  He is my world!  When I do have free time, I enjoy painting and crocheting gifts.  </p>
                
                <p> A list of my hobbies: </p>
            
                <ul>
                    <li>Painting</li>
                    <li>Crocheting</li>
                    <li>Reading</li>
                    <li>Watching YouTube videos</li>
                </ul>
                
                <p>View my GitHub Profile <a href="https://github.com/erfernandez77" target="_blank">here!</a></p>
                
            <?php
                /*
                lab1.php
                Elisa Fernandez
                08/28/2019
                */

                echo '<p>The main website that I use everyday is <a href="https://www.youtube.com/" target="_blank">YouTube.</a>  When I 
                take a break from school or work, I find myself watching a short video.  I like to watch cooking videos, such as 
                <a href="https://www.youtube.com/watch?v=kS6YJJfBYag&list=PLKtIunYVkv_RwB_yx1SZrZC-ddhxyXanh" target="_blank">Gourmet Makes</a>.  
                I also like to watch science experiments made by 
                <a href="https://www.youtube.com/channel/UCY1kMZp36IQSyNx_9h4mpCg" target="_blank">Mark Rober.</a></p>';

                echo '<p>Another website I frequent is 
                <a href="https://www.hottopic.com/pop-culture/anime/?prefn1=classCode&prefv1=Tees" target="_blank">HotTopic.</a>  
                I do like to look at their anime and Disney merchandise.  They are constantly having sales and sending me coupons.  
                I am a sucker for sale ads.</p>';
    
                echo '<p>This assignment was not too difficult for me.  I did have to remind myself of a couple of HTML and CSS tags.  
                It has been a few months since I have had to use them.  The most difficult part for me was learning how to use AWS, 
                GitHub and Heroku.  </p>';
            ?>
        </body>
    </html>