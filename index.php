<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Food Guide</title>
<link rel="stylesheet" href="style/mystyle.css" type="text/css" media="screen" />
</head>

<body onload="new Accordian('basic-accordian',5,'header_highlight');">
<div id="logo">
  <h1>Food Guide App</h1>
</div>
<div id="basic-accordian" >
<div id="test-header" class="accordion_headings header_highlight">Help</div>
<div id="test-content">
  <div class="accordion_child">
    <h1>Welcome to the Canadian Food Application Guide</h1>
    <p>This application is devoloped to meed your needs regarding a balanced food diet on a daily basis. The data is provided by the Government of canada. You can easily access the open dataset provided by the Canadian Food Specialists from <a href="https://open.canada.ca/data/en/dataset/e5f4a98e-0ccf-4e5e-9912-d308b46c5a7f">here</a>. the provided data base contains the amount and types of foods from each of the four food groups that canadians need each day. These food groups include the following:</p>
    <blockquote>
    <ul>
      <li>Vegetables and Fruits</li>
      <li>Grains</li>
      <li>Milk and Alternatives</li>
      <li>Meat and Alternatives</li>
    </ul></blockquote>
    <p>Also, the database includes information about type of genders(Male/Female) and age categories. Besed on provided information, we can categorize age into 8 different categories, include the following:</p>
    <blockquote>
    <ul>
      <li>2 to 3</li>
      <li>4 to 8</li>
      <li>9 to 13</li>
      <li>14 to 18</li>
      <li>19 to 30</li>
      <li>31 to 50</li>
      <li>51 to 70</li>
      <li>70+</li>
    </ul></blockquote>
    <h2>The Functionality of our Application</h2>
    <p>In the section bellow, by choosing your desired type of gender and age category, you can get information about your balanced food diet. According to information provided by nutritionists, we always consider 3 different rules to prepare your daily diet. The first rule is about choosing proper vegetable and fruits' sub categories in the daily diet. It filters sub categories based on the suggestion that every human being should eat at least 1 serving of both green and orange vegetable and fruits on a daily basis. The second rule is about the grain products' category, and it tell us that every balanced diet must have 1 serving of whole grain progucts. Finally, the last rule gives us some information about the category of milk and alternatives. Low fat milk and also 1%, 2% or skim milk are preferred to other dairy products. Based on these food rules, we provide you proper food diet. Besides that, you can recieve different food diets in order to avoid duclicate foods for different weekdays. To find out our recommendation, go to the next section. Take less than one minute... Have a good experience...</p>
  </div>
</div>
<div id="test-header" class="accordion_headings header_highlight">Practice...</div>
<div id="test-content">
  <div class="accordion_child">
    <h1>Get your Balanced Food Diet:</h1>
    <form action="diet.php" method="POST">
      <p>Please select your gender:
        <select class="selection" name="genderType" required>
          <option value="neutral">Select...</option>
          <option value="male">male</option>
          <option value="female">female</option>
        </select>
      </p>
      <br>
      <p>Please  select  your  age: 
        <select class="selection" name="ageCat" required>
          <option value="neutral">Select...</option>
          <option value="2 to 3">2 to 3</option>
          <option value="4 to 8">4 to 8</option>
          <option value="9 to 13">9 to 13</option>
          <option value="14 to 18">14 to 18</option>
          <option value="19 to 30">19 to 30</option>
          <option value="31 to 50">31 to 50</option>
          <option value="51 to 70">51 to 70</option>
          <option value="71+">71+</option>
        </select>
      </p>
      <input type="submit" name="btnGo" class="btn" value="Get information about balanced diet">
    </form>
  </div>
</div>


<div id="footer">
  <p>Developed by SOROUSH OJAGH </p>
</div>
</body>
</html>
