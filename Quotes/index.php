<?php 
include 'quotes.json'
$data = file_get_contents ('./quotes.json');
echo json_encode($data);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
<script>
    let jsonResult = '[  {    "text": "Genius is one percent inspiration and ninety-nine percent perspiration.",    "author": "Thomas Edison"  },  {    "text": "You can observe a lot just by watching.",    "author": "Yogi Berra"  },  {    "text": "A house divided against itself cannot stand.",    "author": "Abraham Lincoln" },  {    "text": "Difficulties increase the nearer we get to the goal.",    "author": "Johann Wolfgang von Goethe"  },  {    "text": "Fate is in your hands and no one elses",    "author": "Byron Pulsifer"  },  {    "text": "Be the chief but never the lord.",    "author": "Lao Tzu"  },  {    "text": "Nothing happens unless first we dream.",    "author": "Carl Sandburg"  },  {    "text": "Well begun is half done.",    "author": "Aristotle"  },  {    "text": "Life is a learning experience, only if you learn.",    "author": "Yogi Berra"  },  {    "text": "Self-complacency is fatal to progress.",    "author": "Margaret Sangster"  }]'
    let result = JSON.parse(jsonResult)
     for ($i in result.jsonResult){
        
     }
</script>
</html>