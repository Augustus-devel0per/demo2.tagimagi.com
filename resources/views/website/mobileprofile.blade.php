<meta name="robots" content="noindex, follow">
@extends('layouts.website.site')
@section('content')
 <style>
      .box {
        width: 300px;
        height: 45px;
        border: 1px solid #999;
        font-size: 18px;
        color: #1c87c9;
        background-color: #eee;
        border-radius: 5px;
        box-shadow: 4px 4px #ccc;
      }
      
       .input {
        width: 200px;
        height: 45px;
        border: 1px solid #999;
        font-size: 18px;
        border-radius: 5px;
      }
      
       .btn {
       
        height: 45px;
        border: 1px solid #333;
        font-size: 18px;
        border-radius: 5px;
        background-color: #A9A9A9;
      }
      
    </style>
    <br>
    <div class="row justify-content-md-center">
        <div class="card">
            <div class="card-body text-left" style="font-size:20px;">
        
<center>
    
    
    <h5><b>Create TagiMagi.com Mobile Profile</b> <br><font style="font-size:16px">Version 1.0 (<a href=https://tagimagi.com/public/images/tmmp.png>Reference</a>) <br>
Copy and Paste Anywhere</b></font></h5></center>

<center>
    
  <!--  
<div style="width:75%">
<input class="input" style="width:100%" id="mbr" placeholder="TagiMagi.com: tmxi_1"></input><button class="btn"  onclick="mobilereader()">Read</button><button class="btn"  onclick="hideprofile()">Clear</button>
<br>
<div style="text-align: left;">
<span  id="reader0"></span>
<span  id="reader00"></span>
<span  id="reader000"></span>
<span  id="readerG"></span>
<span  id="aboutthem"></span>
<span style="width:100px" id="reader1"></span>
<span  id="reader2"></span>
<span  id="reader3"></span>
<span  id="reader4"></span>
<span  id="reader5"></span>
<span  id="reader6"></span>
<span  id="reader7"></span>
<span  id="reader8"></span>
<span  id="reader9"></span>
<span  id="reader10"></span>
<span  id="reader11"></span>
<span  id="reader12"></span>
<span  id="reader13"></span>
<span  id="reader14"></span>
<span  id="reader15"></span>
<span  id="reader16"></span>
<span  id="reader17"></span>
<span  id="reader18"></span>
<span  id="reader19"></span>
<span  id="reader20"></span>
<span  id="aboutwho"></span>
<span  id="reader21"></span>
<span  id="reader22"></span>
<span  id="reader23"></span>
<span  id="reader24"></span>
<span  id="reader25"></span>
<span  id="reader26"></span>
<span  id="reader27"></span>
<span  id="reader28"></span>
<span  id="reader29"></span>
<span  id="reader30"></span>
<span  id="reader31"></span>
<span  id="reader32"></span>
<span  id="reader33"></span>
<span  id="reader34"></span>
<span  id="reader35"></span>
<span  id="reader36"></span>
<span  id="reader37"></span>
<span  id="reader38"></span>
<span  id="reader39"></span>
<span  id="reader40"></span>
<span  id="reader41"></span>
<span  id="reader42"></span>
<span  id="reader43"></span>
<span  id="reader44"></span>
<span  id="reader45"></span>
<span  id="reader46"></span>
<span  id="reader47"></span>
<span  id="reader48"></span>
<span  id="reader49"></span>
<span  id="reader50"></span>
<span  id="reader51"></span>
<span  id="reader52"></span>
<span  id="reader53"></span>
<span  id="reader54"></span>
<span  id="reader55"></span>
<span  id="reader56"></span>
<span  id="reader57"></span>
<span  id="reader58"></span>
<span  id="reader59"></span>
<span  id="reader60"></span>
<span  id="reader61"></span>
<span  id="reader62"></span>
<span  id="reader63"></span>
<span  id="reader64"></span>
<span  id="reader65"></span>
<span  id="reader66"></span>
<span  id="reader67"></span>
<span  id="reader68"></span>
<span  id="reader69"></span>
<span  id="reader70"></span>
<span  id="reader71"></span>
<span  id="reader72"></span>
<span  id="reader73"></span>
<span  id="reader74"></span>
<span  id="reader75"></span>
<span  id="reader76"></span>
<span  id="reader77"></span>
<span  id="reader78"></span>
<span  id="reader79"></span>
<span  id="reader80"></span>
<span  id="reader81"></span>
<span  id="reader82"></span>
<span  id="reader83"></span>
<span  id="reader84"></span>
<span  id="reader85"></span>
<span  id="reader86"></span>
<span  id="reader87"></span>
<span  id="reader88"></span>
<span  id="reader89"></span>

</div>
</div>
</center>
<br>
-->
<center>
        
<span id="mobileprofile">
TagiMagi.com: tmxi_1
</span><br><br>
<button class="btn" onclick="copymobileprofile()">Copy Mobile Profile</button>
<button class="btn" onclick="clearmobileprofile()">Clear All</button>

<br><Br>
<label for="profiletype"></label>
<select class="box" name="profiletype" id="profiletype">
  <option selected>Individual</option>
  <option>Couple</option>
  <option>Trio</option>
  <option>Collection of Individuals</option>
</select>
<br><br>

<label for="tagcategory"></label>
<select  class="box" name="tagcategory" id="tagcategory">
    <optgroup label="About You">
  <option id=1  selected>1: Your names are:</option>
  <option id=2 >2: You are a/an:</option>
  <option id=3 >3: You are:</option>
  <option id=4 >4: You are in/on:</option>
  <option id=5 >5: You are from:</option>
  <option id=6 >6: Your birth/creation time/dates:</option>
  <option id=7 >7: Your birth/creation location:</option>
  <option id=8 >8: You are interested in:</option>
  <option id=9 >9: You love:</option>
  <option id=10 >10: You have to offer, give, or share:</option>
  <option id=11 >11: You have, own, or possess:</option>
  <option id=12 >12: You are looking for:</option>
  <option id=13 >13: You are like/similar to (in any way):</option>
   <optgroup label="About Who You Are Looking For">
    <option id=21 >21: Their names are:</option>
  <option id=22 >22: They are a/an:</option>
  <option id=23 >23: They are:</option>
  <option id=24 >24: They are in/on:</option>
  <option id=25 >25: They are from:</option>
  <option id=26 >26: Their birth/creation time/dates:</option>
  <option id=27 >27: Their birth/creation location:</option>
  <option id=28 >28: They are interested in:</option>
  <option id=29 >29: They love:</option>
  <option id=30 >30: They have to offer, give, or share:</option>
  <option id=31 >31: They have, own, or possess:</option>
  <option id=32 >32: They are looking for:</option>
  <option id=33 >33: They are like/similar to (in any way):</option>
  <optgroup label="Specific Offer">
   <option id=41 >41: Title/Name of Product Offer</option>
  <option id=42 >42: Offer is a/an:</option>
  <option id=43 >43: Offer is:</option>
  <option id=44 >44: Location of Offer:</option>
  <option id=45 >45: Time Offer will be:</option>
  <option id=46 >46: Offer gives or provides:</option>
  <option id=47 >47: Offer needs or requires:</option>
  <option id=48 >48: Offer has or contains:</option>
  <option id=49 >49: Product birth/creation time:</option>
  <option id=50 >50: Offer is by or from:</option>
  <option id=51 >51: Offer is about:</option>
  <option id=52 >52: Offer is like/similar to:</option>
  <option id=53 >53: Offer is for:</option>
  <option id=54 >54: Offer is to:</option> 
  <optgroup label="Specific Request">
    <option id=61 >61: Title/Name of Product Request</option>
  <option id=62 >62: Request is a/an:</option>
  <option id=63 >63: Request is:</option>
  <option id=64 >64: Location of request:</option>
  <option id=65 >65: Time Request will be:</option>
  <option id=66 >66: Request gives or provides:</option>
  <option id=67 >67: Request needs or requires:</option>
  <option id=68 >68: Request has or contains:</option>
  <option id=69 >69: Product birth/creation time:</option>
  <option id=70 >70: Request is by or from:</option>
  <option id=71 >71: Request is about:</option>
  <option id=72 >72: Request is like/similar to:</option>
  <option id=73 >73: Request is for:</option>
  <option id=74 >74: Request is to:</option> 
  <optgroup label="Contact Info">
 <option id=81 >81: Contact/Meet me at Location:</option>
  <option id=82 >82: 
  Date/time(s) to Contact/Meet me:</option>  
  
<option id=89 >89: 
  Mobile Profile 
Create Date:</option>   

  
</select><Br><Br>

<input class="input" type="text" value="Enter tag" id="addmp"><Br><Br>
<button class="btn" onclick="clearinput()">Clear Box</button>
<button class="btn" onclick="clearaddmp()">Clear Tags</button>
<button class="btn" onclick="addmobileprofile()">Add Tag</button><br><Br>

<span id="mobileprofile2">
TagiMagi.com: tmxi_1
</span><br><br>

</center>

<center><h5><b>How it Works</b></h5><br></center>
</center>


Don't want to post to the website? Don't want your profile to expire? Perhaps you want to place your profile somewhere else? No problem! At TagiMagi.com you can create a mobile profile. A mobile profile allows you to place it anywhere: your blog, your website, on social media - anywhere. 
TagiMagi.com is not needed. Here is how to place your TagiMagi.com mobile profile:<br><br>
Some examples are as follows:<br><br>
<b>Method 1:</b> (no colons (except after TagiMagi.com), no commas, no periods, only a space after each tag)<br><br>
<font size=5px><b>TagiMagi.com: tmxi_1 1aprilwillis 1wondergirl77 4mountain 4Nebraska 9dancinginthesun 10sunflowers 10dandelions 10roses 81aprilwillis77.com</b></font><br><br>
<b>Method 2:</b> (a colon before each tag group, commas after each tag, a period after each tag group, and spaces allowed with individual tags)<br><br>
<font size=5px><b>TagiMagi.com: tmxi_1 1: April Willis, Wondergirl77. 4: mountain, Nebraska. 9: Dancing in the Sun. 10: Sunflowers, Dandelions, Roses. 81: aprilwillis77.com.</b></font><br><br>
Both Method 1 and 2 are identical. They are just the different ways you can choose to place your profile anywhere, depending on how easily and precisely you want others to find it and the specific tags within it. 
For example, if you want someone to immediately find that you are in <b>Nebraska</b> and offering <b>sunflowers</b>, then all you would need to do is add <b>4Nebraska</b> and <b>10sunflowers</b> after the two default tags and that's all they would need to search too.<br><br>

Currently, mobile profiles begin with <b>TagiMagi.com:</b> and <b>tmxi_</b>. This specifies to the searcher or bot that it is a mobile TagiMagi.com profile and that it is version 1 (because "tmxi_" may change to something else in the future). <br><br>
However, in the profile, notice there is a 1 after it:<b> tmxi_1</b>. The 1 stands for Individual. <br>
If you are <b>Couple</b> and want to create a mobile profile together: <b>tmxi_2</b>. <br>
If you are <b>Trio</b> and you want to create a mobile profile together: <b>tmxi_3</b>. <br>
If you are a <b>collection of individuals</b> (4 or more) and want to create a mobile profile together, then just add a G:<b> tmxi_G</b>. <br><br>
And finally, if you want to specify the <b>exact number</b> of the collection of individuals, then just add a dot after the G and the number of individuals: <b>tmxi_G.4257</b>. This is mobile profile for a <b>collection of 4,257 individuals</b>. <br>
<b>tmxi_G.4</b> is a mobile profile for <b>4 individuals</b>. <br><br>
It is advised to keep it at G or add another tag after it with G.[number] so users can find your collection-of-individuals profile even if they are not looking for a specific number greater than 3.<br><br>
When a person or bot searches <B>tmxi_1</b> or <B>tmxi_2</b> or <b>tmxi_3</b> or <B>tmxi_G</b> or <B>tmxi_G.4000</b> they will be able to find all Tagimagi.com profiles of that type or number.<br><br>
Now on to the final thing; lets explain the numbers before the each tag:<br><br>
The number 1 before a tag means <em>Your names are:</em><br>
<b>Method 1</b>: 1aprilwillis 1wondergirl77 means your names are April Willis and Wondergirl77<br>
<b>Method 2</b>: 1: April Willis, Wondergirl77. means the same: your names are April Willis and Wondergirl77<br><br>
The number 3 before a tag means <em>You are in/on:</em><br>
<b>Method 1</b>: 4mountain 4nebraska means you are in/on: mountain and Nebraska<br>
<b>Method 2</b>: 4: mountain, Nebraska. means you are in/on: mountain and Nebraska<br><br>
The number 9 means: <em>You love:</em><br>
<b>Method 1</b>: 9dancinginthesun means you love dancing in the sun.<br>
<b>Method 2</b>: 9: Dancing in the Sun. means you love: dancing in the sun.<br><br>
The number 10 means: <em>You have to offer, give, or share:</em><br>
<b>Method 1</b>: 10sunflowers 10dandelions 10roses means you have to offer give or share: sunflowers, danelions, and roses<br>
<b>Method 2</b>: 10: sunflowers, dandelions, roses. means you have to offer give or share: sunflowers, dandelions, and roses<br><br>
The number 81 means: <em>You can contact or meet me at location:</em><br>
<b>Method 1</b>: 81aprilwillis77.com means you can contact me at: aprilwillis77.com<br>
<b>Method 2</b>: 81: aprilwillis77.com means you can contact or meet me at: aprilwillis77.com<br><br>
Occasionally, if you are using Method 1, you may have a tag that actually starts with a number instead of a letter, such as a time, address, or amount of something:<br><Br>
<b>Examples</b>: 561 Penton Lane, 8:00 pm, 3 cars, 5 birds<br><Br>
In this case, just add a dot after the tag type and before the actual tag:<br>
<b>Method 1:</b> 81.561PentonLane 82.8:00pm 11.3cars 11.5birds<br>
It reads: Contact or meet me at location: 561 Penton Lane. Date/times to contact: 8:00 pm. I have, own, or possess 3 cars and 5 birds<br><Br>
If you are using Method 2, then no dot would be needed:<Br>
<b>Method 2:</b> 81: Penton Lane. 82: 8:00 pm. 11: 3 cars, 5 birds. <br>
It reads the same: Contact or meet me at location: 561 Penton Lane. Date/times to contact: 8:00 pm. I have, own, or possess 3 cars and 5 birds<br><Br>
However, in many cases, you can use words as numbers to avoid adding the dot:<br>
<b>Method 1:</b> 81fivesixonePentonLane 82eightoclockpm 11threecars 11fivebirds<br>
And it still reads the same: Contact or meet me at location 561 Penton Lane and at date/times 8:00 pm. I have, own, or possess 3 cars and 5 birds<br><Br>

That's it! That is how TagiMagi.com mobile profiles work.<br><br> 
Here are the two example profiles again and there meanings:<br><br>
<b>Method 1:</b> (no colons, no commas, no periods, only a space after each tag)<br><br>
<font size=5px><b>TagiMagi.com: tmxi_1 1aprilwillis 1wondergirl77 4mountain 4Nebraska 9dancinginthesun 10sunflowers 10dandelions 10roses 81aprilwillis77.com</b></font><br><br>
<b>Method 2:</b> (a colon before each tag group, commas after each tag, a period after each tag group, and spaces allowed with individual tags)<br><br>
<font size=5px><b>TagiMagi.com: tmxi_1 1: April Willis, Wondergirl77. 4: mountain, Nebraska. 9: Dancing in the Sun. 10: Sunflowers, Dandelions, Roses. 81: aprilwillis77.com.</b></font><br><br>
They both mean:<br><br>
"This is a TagiMagi.com mobile profile of version 1. I am Individual. The names I go by are April Willis and Wondergirl77. I'm in/on mountain and Nebraska. I love dancing in the sun. 
I have to offer give or share: sunflowers, dandelions, and roses. You can contact or meet me at: aprilwillis77.com"<br><br>
Here is a quick reference of our current list of the tag category numbers and their meanings:<br><br>
<B>Profile Type:</b><Br><Br>
TagiMagi.com = tagimagi.com mobile profile<br>
tmx_1 = Individual<br>
tmx_2 = Couple<br>
tmx_3 = Trio<br>
tmx_G = Collection of Individuals<br>
tmx_G.24 = Collection of 24 Individuals<br><br>
<b>About you</b>:<br><Br>
1 = Your names are:<br>
2 = You are a/an:<br>
3 = You are:<br>
4 = You are in/on:<br>
5 = You are from:<br>
6 = Your birth/creation time/dates:<br>
7 = Your birth/creation location:<br>
8 = You are interested in:<br>
9 = You love:<br>
10 = You have to offer, give, or share:<br>
11 = You have own or posses:<br>
12 = You are looking for:<br>
13 = You are like/similar to (in any way):<br>
<br><b>Who you are looking for:</b><br><br>
21 = Their names are:<br>
22 = They are a/an (descriptive nouns):<br>
23 = They are a/an (descriptive nouns):<br>
24 = They are in/on:<br>
25 = They are from:<br>
26 = Their birth/creation time/dates:<br>
27 = Their birth/creation location:<br>
28 = They are interested in:<br>
29 = They love:<br>
30 = They have to offer, give, or share:<br>
31 = They have own or posses:<br>
32 = They are looking for:<br>
33 = They are like/similar to (in any way):<br>
<Br><b>Specific Offer:</b><br><br>
41 = Title or Name of Offer:<br>
42 = Descriptive Nouns of Offer:<br>
43 = Offer is:<br>
44 = Location of offer:<br>
45 = Time offer will be:<br>
46 = Offer gives or provides:<br>
47 = Offer needs or requires:<br>
48 = Offer has or contains:<br>
49 = Product/offer birth/creation time:<br>
50 = Offer is by or from:<br>
51 = Offer is about:<br>
52 = Offer is like/similar to:<br>
53 = Offer is for:<br>
54 = Offer is to:<br>
<br><b>Specific Request:</b><br><Br>
61 = Title or Name of Request:<br>
62 = Descriptive Nouns of Request:<br>
63 = Request is:<br>
64 = Location of Request:<br>
65 = Time Request will be:<br>
66 = Request gives or provides:<br>
67 = Request needs or requires:<br>
68 = Request has or contains:<br>
69 = Product/Request birth/creation time:<br>
70 = Request is by or from:<br>
71 = Request is about:<br>
72 = Request is like/similar to:<br>
73 = Request is for:<br>
74 = Request is to:<br><Br>
<B>Contact Info</b><br><br>
81 = Contact or Meet me at:<br>
82 = Date(s) Time(s) to contact or meet me:<br><br>


So now, go ahead and place your mobile profile anywhere. Users will eventually be able to search and find them on websites and search engines. And yes, if you have your own website, you are free to host tagimagi.com mobile profiles, just as long as the format as mentioned above stays the same. 
And yes, if you have a search engine, you are free to have it search specifically in real time for TagiMagi.com mobile profiles online (we will be working on this as well), just as long as the format stays the same.<br>
</font>
            </div>
        </div>
    </div>

<script>


//const cars = ["You are, "Volvo", "BMW"];

var mobileprofile = [['TagiMagi.com:', 'tmxi_1'],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[]
]

function omega() {

document.getElementById('mobileprofile').innerHTML = 
mobileprofile[0].join(" ")+" "
+mobileprofile[1].join(" ")+" "
+mobileprofile[2].join(" ")+" "
+mobileprofile[3].join(" ")+" "
+mobileprofile[4].join(" ")+" "
+mobileprofile[5].join(" ")+" "
+mobileprofile[6].join(" ")+" "
+mobileprofile[7].join(" ")+" "
+mobileprofile[8].join(" ")+" "
+mobileprofile[9].join(" ")+" "
+mobileprofile[10].join(" ")+" "
+mobileprofile[11].join(" ")+" "
+mobileprofile[12].join(" ")+" "
+mobileprofile[13].join(" ")+" "
+mobileprofile[14].join(" ")+" "
+mobileprofile[21].join(" ")+" "
+mobileprofile[22].join(" ")+" "
+mobileprofile[23].join(" ")+" "
+mobileprofile[24].join(" ")+" "
+mobileprofile[25].join(" ")+" "
+mobileprofile[26].join(" ")+" "
+mobileprofile[27].join(" ")+" "
+mobileprofile[28].join(" ")+" "
+mobileprofile[29].join(" ")+" "
+mobileprofile[30].join(" ")+" "
+mobileprofile[31].join(" ")+" "
+mobileprofile[32].join(" ")+" "
+mobileprofile[33].join(" ")+" "
+mobileprofile[41].join(" ")+" "
+mobileprofile[42].join(" ")+" "
+mobileprofile[43].join(" ")+" "
+mobileprofile[44].join(" ")+" "
+mobileprofile[45].join(" ")+" "
+mobileprofile[46].join(" ")+" "
+mobileprofile[47].join(" ")+" "
+mobileprofile[48].join(" ")+" "
+mobileprofile[49].join(" ")+" "
+mobileprofile[50].join(" ")+" "
+mobileprofile[51].join(" ")+" "
+mobileprofile[52].join(" ")+" "
+mobileprofile[53].join(" ")+" "
+mobileprofile[54].join(" ")+" "
+mobileprofile[61].join(" ")+" "
+mobileprofile[62].join(" ")+" "
+mobileprofile[63].join(" ")+" "
+mobileprofile[64].join(" ")+" "
+mobileprofile[65].join(" ")+" "
+mobileprofile[66].join(" ")+" "
+mobileprofile[67].join(" ")+" "
+mobileprofile[68].join(" ")+" "
+mobileprofile[69].join(" ")+" "
+mobileprofile[70].join(" ")+" "
+mobileprofile[71].join(" ")+" "
+mobileprofile[72].join(" ")+" "
+mobileprofile[73].join(" ")+" "
+mobileprofile[74].join(" ")+" "
+mobileprofile[81].join(" ")+" "
+mobileprofile[82].join(" ")+" "
+mobileprofile[89].join(" ")+" "
}


function omega2() {

document.getElementById('mobileprofile2').innerHTML = 
mobileprofile[0].join(" ")+" "
+mobileprofile[1].join(" ")+" "
+mobileprofile[2].join(" ")+" "
+mobileprofile[3].join(" ")+" "
+mobileprofile[4].join(" ")+" "
+mobileprofile[5].join(" ")+" "
+mobileprofile[6].join(" ")+" "
+mobileprofile[7].join(" ")+" "
+mobileprofile[8].join(" ")+" "
+mobileprofile[9].join(" ")+" "
+mobileprofile[10].join(" ")+" "
+mobileprofile[11].join(" ")+" "
+mobileprofile[12].join(" ")+" "
+mobileprofile[13].join(" ")+" "
+mobileprofile[14].join(" ")+" "
+mobileprofile[21].join(" ")+" "
+mobileprofile[22].join(" ")+" "
+mobileprofile[23].join(" ")+" "
+mobileprofile[24].join(" ")+" "
+mobileprofile[25].join(" ")+" "
+mobileprofile[26].join(" ")+" "
+mobileprofile[27].join(" ")+" "
+mobileprofile[28].join(" ")+" "
+mobileprofile[29].join(" ")+" "
+mobileprofile[30].join(" ")+" "
+mobileprofile[31].join(" ")+" "
+mobileprofile[32].join(" ")+" "
+mobileprofile[33].join(" ")+" "
+mobileprofile[41].join(" ")+" "
+mobileprofile[42].join(" ")+" "
+mobileprofile[43].join(" ")+" "
+mobileprofile[44].join(" ")+" "
+mobileprofile[45].join(" ")+" "
+mobileprofile[46].join(" ")+" "
+mobileprofile[47].join(" ")+" "
+mobileprofile[48].join(" ")+" "
+mobileprofile[49].join(" ")+" "
+mobileprofile[50].join(" ")+" "
+mobileprofile[51].join(" ")+" "
+mobileprofile[52].join(" ")+" "
+mobileprofile[53].join(" ")+" "
+mobileprofile[54].join(" ")+" "
+mobileprofile[61].join(" ")+" "
+mobileprofile[62].join(" ")+" "
+mobileprofile[63].join(" ")+" "
+mobileprofile[64].join(" ")+" "
+mobileprofile[65].join(" ")+" "
+mobileprofile[66].join(" ")+" "
+mobileprofile[67].join(" ")+" "
+mobileprofile[68].join(" ")+" "
+mobileprofile[69].join(" ")+" "
+mobileprofile[70].join(" ")+" "
+mobileprofile[71].join(" ")+" "
+mobileprofile[72].join(" ")+" "
+mobileprofile[73].join(" ")+" "
+mobileprofile[74].join(" ")+" "
+mobileprofile[81].join(" ")+" "
+mobileprofile[82].join(" ")+" "
+mobileprofile[89].join(" ")+" "
}



                                     
function copymobileprofile() {
//omega()

var newprofile = []

  var copyText = document.getElementById("mobileprofile").innerHTML;
  
function recreate(){
for (i=0;i<copyText.length;i++)
{
newprofile.push(copyText[i])
}
//alert(newprofile)

for (i=0;i<newprofile.length;i++)
{
if(newprofile[i] == " ")
{
newprofile[i] = "}*@!;"
}
}
//alert(newprofile)


for (s=0;s<newprofile.length;s++)
{
for (i=0;i<newprofile.length;i++)
{
if(newprofile[i] == "}*@!;" && newprofile[i+1] == "}*@!;")
{
newprofile.splice(i,1)
}
}
}
//alert(newprofile)

for (i=0;i<newprofile.length;i++)
{
if(newprofile[i] == "}*@!;")
{
newprofile[i] = " "
}
}
//alert(newprofile)

newprofile=newprofile.join("")

//alert(newprofile)

//newprofile.select();
//newprofile.setSelectionRange(0, 99999); /* For mobile devices */
}
recreate()

  navigator.clipboard.writeText(newprofile);
  alert("Copied: " + newprofile);

  
}

function addmobileprofile() {

//alert(document.getElementById('addmp').value[0])

if (document.getElementById('addmp').value == "") {
    alert("Please enter a tag");
    return false;
  }
  
if (isNaN(document.getElementById('addmp').value[0]))

{

var t = document.getElementById("tagcategory");

var adm = document.getElementById("addmp").value;
var tid = t.options[t.selectedIndex].id

var p = document.getElementById("profiletype");

var pro1 = p.options[p.selectedIndex].text
var pro2 = p.options[p.selectedIndex].text
var pro3 = p.options[p.selectedIndex].text
var pro4 = p.options[p.selectedIndex].text

for (let i = 1; i < 14; i++) {
 if (tid == i && pro1 == "Individual") {
  mobileprofile[i].push(i+document.getElementById('addmp').value.replace(/\s/g, ''))
   mobileprofile[0].splice(0, 2, 'TagiMagi.com:', 'tmxi_1');
 document.getElementById('mobileprofile').innerHTML = ''
 
//alert(mobileprofile)
 
omega()

}
}
for (let i = 1; i < 14; i++) {
 if (tid == i && pro1 == "Couple") {
  mobileprofile[i].push(i+document.getElementById('addmp').value.replace(/\s/g, ''))
 mobileprofile[0].splice(0, 2, 'TagiMagi.com:', 'tmxi_2');
 document.getElementById('mobileprofile').innerHTML = ''
 
omega()

}
}
for (let i = 1; i < 14; i++) {
 if (tid == i && pro1 == "Trio") {
 mobileprofile[i].push(i+document.getElementById('addmp').value.replace(/\s/g, ''))
  mobileprofile[0].splice(0, 2, 'TagiMagi.com:', 'tmxi_3');
 document.getElementById('mobileprofile').innerHTML = ''

omega()

}
}
for (let i = 1; i < 14; i++) {
 if (tid == i && pro1 == "Collection of Individuals") {
 mobileprofile[i].push(i+document.getElementById('addmp').value.replace(/\s/g, ''))
  mobileprofile[0].splice(0, 2, 'TagiMagi.com:', 'tmxi_G');
 document.getElementById('mobileprofile').innerHTML = ''

omega()

}
}

for (let i = 21; i < 34; i++) {
 if (tid == i && pro1 == "Individual") {
 mobileprofile[i].push(i+document.getElementById('addmp').value.replace(/\s/g, ''))
  mobileprofile[0].splice(0, 2, 'TagiMagi.com:', 'tmxi_1');
 document.getElementById('mobileprofile').innerHTML = ''
 
omega()

}
}

for (let i = 21; i < 34; i++) {
 if (tid == i && pro1 == "Couple") {
 mobileprofile[i].push(i+document.getElementById('addmp').value.replace(/\s/g, ''))
  mobileprofile[0].splice(0, 2, 'TagiMagi.com:', 'tmxi_2');
 document.getElementById('mobileprofile').innerHTML = ''

omega()

}
}
for (let i = 21; i < 34; i++) {
 if (tid == i && pro1 == "Trio") {
 mobileprofile[i].push(i+document.getElementById('addmp').value.replace(/\s/g, ''))
  mobileprofile[0].splice(0, 2, 'TagiMagi.com:', 'tmxi_3');
 document.getElementById('mobileprofile').innerHTML = ''

omega()

}
}
for (let i = 21; i < 34; i++) {
 if (tid == i && pro1 == "Collection of Individuals") {
 mobileprofile[i].push(i+document.getElementById('addmp').value.replace(/\s/g, ''))
  mobileprofile[0].splice(0, 2, 'TagiMagi.com:', 'tmxi_G');
 document.getElementById('mobileprofile').innerHTML = ''

omega()

}
}


for (let i = 41; i < 55; i++) {
 if (tid == i && pro1 == "Individual") {
 mobileprofile[i].push(i+document.getElementById('addmp').value.replace(/\s/g, ''))
  mobileprofile[0].splice(0, 2, 'TagiMagi.com:', 'tmxi_1');
 document.getElementById('mobileprofile').innerHTML = ''

omega()

}
}

for (let i = 41; i < 55; i++) {
 if (tid == i && pro1 == "Couple") {
 mobileprofile[i].push(i+document.getElementById('addmp').value.replace(/\s/g, ''))
  mobileprofile[0].splice(0, 2, 'TagiMagi.com:', 'tmxi_2');
 document.getElementById('mobileprofile').innerHTML = ''

omega()

}
}
for (let i = 41; i < 55; i++) {
 if (tid == i && pro1 == "Trio") {
 mobileprofile[i].push(i+document.getElementById('addmp').value.replace(/\s/g, ''))
  mobileprofile[0].splice(0, 2, 'TagiMagi.com:', 'tmxi_3');
 document.getElementById('mobileprofile').innerHTML = ''

omega()

}
}
for (let i = 41; i < 55; i++) {
 if (tid == i && pro1 == "Collection of Individuals") {
 mobileprofile[i].push(i+document.getElementById('addmp').value.replace(/\s/g, ''))
  mobileprofile[0].splice(0, 2, 'TagiMagi.com:', 'tmxi_G');
 document.getElementById('mobileprofile').innerHTML = ''

omega()

}
}

for (let i = 61; i < 75; i++) {
 if (tid == i && pro1 == "Individual") {
 mobileprofile[i].push(i+document.getElementById('addmp').value.replace(/\s/g, ''))
  mobileprofile[0].splice(0, 2, 'TagiMagi.com:', 'tmxi_1');
 document.getElementById('mobileprofile').innerHTML = ''

omega()

}
}

for (let i = 61; i < 75; i++) {
 if (tid == i && pro1 == "Couple") {
 mobileprofile[i].push(i+document.getElementById('addmp').value.replace(/\s/g, ''))
  mobileprofile[0].splice(0, 2, 'TagiMagi.com:', 'tmxi_2');
 document.getElementById('mobileprofile').innerHTML = ''

omega()

}
}
for (let i = 61; i < 75; i++) {
 if (tid == i && pro1 == "Trio") {
 mobileprofile[i].push(i+document.getElementById('addmp').value.replace(/\s/g, ''))
  mobileprofile[0].splice(0, 2, 'TagiMagi.com:', 'tmxi_3');
 document.getElementById('mobileprofile').innerHTML = ''

omega()

}
}
for (let i = 61; i < 75; i++) {
 if (tid == i && pro1 == "Collection of Individuals") {
 mobileprofile[i].push(i+document.getElementById('addmp').value.replace(/\s/g, ''))
  mobileprofile[0].splice(0, 2, 'TagiMagi.com:', 'tmxi_G');
 document.getElementById('mobileprofile').innerHTML = ''

omega()

}
}

for (let i = 81; i < 90; i++) {
 if (tid == i && pro1 == "Individual") {
 mobileprofile[i].push(i+document.getElementById('addmp').value.replace(/\s/g, ''))
  mobileprofile[0].splice(0, 2, 'TagiMagi.com:', 'tmxi_1');
 document.getElementById('mobileprofile').innerHTML = ''

omega()

}
}

for (let i = 81; i < 90; i++) {
 if (tid == i && pro1 == "Couple") {
 mobileprofile[i].push(i+document.getElementById('addmp').value.replace(/\s/g, ''))
  mobileprofile[0].splice(0, 2, 'TagiMagi.com:', 'tmxi_2');
 document.getElementById('mobileprofile').innerHTML = ''

omega()

}
}
for (let i = 81; i < 90; i++) {
 if (tid == i && pro1 == "Trio") {
 mobileprofile[i].push(i+document.getElementById('addmp').value.replace(/\s/g, ''))
  mobileprofile[0].splice(0, 2, 'TagiMagi.com:', 'tmxi_3');
 document.getElementById('mobileprofile').innerHTML = ''

omega()

}
}
for (let i = 81; i < 90; i++) {
 if (tid == i && pro1 == "Collection of Individuals") {
 mobileprofile[i].push(i+document.getElementById('addmp').value.replace(/\s/g, ''))
  mobileprofile[0].splice(0, 2, 'TagiMagi.com:', 'tmxi_G');
 document.getElementById('mobileprofile').innerHTML = ''

omega()

}
}

document.getElementById('mobileprofile2').innerHTML =  document.getElementById('mobileprofile').innerHTML

}

else {

alert("First character must not be a number. Please add a dot (.) before the number OR use words as numbers. Example: .6weeks or sixweeks.")

}



}


function clearmobileprofile() {

document.getElementById('mobileprofile').innerHTML = ''
mobileprofile = [['TagiMagi.com:', 'tmxi_1'],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[]
]

document.getElementById('mobileprofile2').innerHTML = ''

}

function clearaddmp() {
//document.getElementById('addmp').value = ""
var t = document.getElementById("tagcategory");
var tid = t.options[t.selectedIndex].id

for (let i = 1; i < 14; i++) {
if (tid == i) {
mobileprofile[i].splice(0, 60);
omega()
omega2()

}
}

for (let i = 21; i < 34; i++) {
if (tid == i) {
mobileprofile[i].splice(0, 60);
omega()
omega2()
}
}

for (let i = 41; i < 55; i++) {
if (tid == i) {
mobileprofile[i].splice(0, 60);
omega()
omega2()
}
}

for (let i = 61; i < 75; i++) {
if (tid == i) {
mobileprofile[i].splice(0, 60);
omega()
omega2()
}
}

for (let i = 81; i < 90; i++) {
if (tid == i) {
mobileprofile[i].splice(0, 60);
omega()
omega2()
}
}
}


function clearinput() {
document.getElementById('addmp').value = ""

}



function newclear() {
alert("yes")
//document.getElementById.("mbr").value = 0
}

var readerarray2 = ["reader1", "reader2", "reader3", "reader4", "reader5", "reader6", "reader7", "reader8", "reader9", "reader10", "reader11", "reader12", "reader13", "reader14", "reader15", "reader16", "reader17", "reader18", "reader19", "reader20","reader21", "reader22", "reader23", "reader24", "reader25", "reader26", "reader27", "reader28", "reader29", "reader30", "reader31", "reader32", "reader33", "reader34", "reader35", "reader36", "reader37", "reader38", "reader39", "reader40", "reader41", "reader42", "reader43", "reader44", "reader45", "reader46", "reader47", "reader48", "reader49", "reader50", "reader51", "reader52", "reader53", "reader54", "reader55", "reader56", "reader57", "reader58", "reader59", "reader60", "reader61", "reader62", "reader63", "reader64", "reader65", "reader66", "reader67", "reader68", "reader69", "reader70", "reader71", "reader72", "reader73", "reader74", "reader75", "reader76", "reader77", "reader78", "reader79", "reader80", "reader81", "reader82", "reader83", "reader84", "reader85", "reader86", "reader87", "reader88", "reader89", "reader90", "reader91", "reader92", "reader93", "reader94", "reader95", "reader96", "reader97", "reader98", "reader99", "reader100"]
function hideprofile()
{
//document.getElementById.('mbr').value = 0
document.getElementById("reader0").innerHTML = ""
document.getElementById("reader00").innerHTML = ""
document.getElementById("reader000").innerHTML = ""
document.getElementById("readerG").innerHTML = ""
for(i=0;i<105;i++){
document.getElementById(readerarray2[i]).innerHTML = ""
}
//document.getElementById('mbr').value = ""
}



var b = [[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[]
]


var readerarray = ["reader1", "reader2", "reader3", "reader4", "reader5", "reader6", "reader7", "reader8", "reader9", "reader10", "reader11", "reader12", "reader13", "reader14", "reader15", "reader16", "reader17", "reader18", "reader19", "reader20","reader21", "reader22", "reader23", "reader24", "reader25", "reader26", "reader27", "reader28", "reader29", "reader30", "reader31", "reader32", "reader33", "reader34", "reader35", "reader36", "reader37", "reader38", "reader39", "reader40", "reader41", "reader42", "reader43", "reader44", "reader45", "reader46", "reader47", "reader48", "reader49", "reader50", "reader51", "reader52", "reader53", "reader54", "reader55", "reader56", "reader57", "reader58", "reader59", "reader60", "reader61", "reader62", "reader63", "reader64", "reader65", "reader66", "reader67", "reader68", "reader69", "reader70", "reader71", "reader72", "reader73", "reader74", "reader75", "reader76", "reader77", "reader78", "reader79", "reader80", "reader81", "reader82", "reader83", "reader84", "reader85", "reader86", "reader87", "reader88", "reader89", "reader90", "reader91", "reader92", "reader93", "reader94", "reader95", "reader96", "reader97", "reader98", "reader99", "reader100"]

function clear() {
for(i=0;i<105;i++){
document.getElementById(readerarray[i]).innerHTML = ""

}

}



s=0

v = 0


function profiles() {
pr = []
pr = [document.getElementById('mbr').value.trim()]

for(i=0; i < pr[0].length; i++){

if (pr[0][i] == " " && pr[0][i+1] == "t" && pr[0][i+2] == "m" && pr[0][i+3] == "x" && pr[0][i+4] == "i" && pr[0][i+5] == "_" && pr[0][i+6] == "1" && pr[0][i+7] == " ") {
document.getElementById('reader0').innerHTML = "<b>Profile Type:</b> Individual<br>"

}

if (pr[0][i] == " " && pr[0][i+1] == "t" && pr[0][i+2] == "m" && pr[0][i+3] == "x" && pr[0][i+4] == "i" && pr[0][i+5] == "_" && pr[0][i+6] == "2" && pr[0][i+7] == " ") {
document.getElementById('reader00').innerHTML = "<b>Profile Type:</b> Couple<br>"

}

if (pr[0][i] == " " && pr[0][i+1] == "t" && pr[0][i+2] == "m" && pr[0][i+3] == "x" && pr[0][i+4] == "i" && pr[0][i+5] == "_" && pr[0][i+6] == "3" && pr[0][i+7] == " ") {
document.getElementById('reader000').innerHTML = "<b>Profile Type:</b> Trio<br>"

}

if (pr[0][i] == " " && pr[0][i+1] == "t" && pr[0][i+2] == "m" && pr[0][i+3] == "x" && pr[0][i+4] == "i" && pr[0][i+5] == "_" && pr[0][i+6] == "G" && pr[0][i+7] == " ") {
document.getElementById('readerG').innerHTML = "<b>Profile Type:</b> Collection of Individuals<br>"

}



}

}



function mobilereader() {

document.getElementById('reader0').innerHTML = ""
document.getElementById('reader00').innerHTML = ""
document.getElementById('reader000').innerHTML = ""
document.getElementById('readerG').innerHTML = ""

profiles()


var one = [[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[]
]



for(i=0; i < 89; i++){
document.getElementById(readerarray[i]).innerHTML = ""
}


var a = []
a = [document.getElementById('mbr').value.trim()]


//alert(a[0][0])
for(i=0; i < a[0].length; i++){

if (a[0][i] == " " && a[0][i+1] != " ") { s++; }

if(a[0][i] != " ")
{
b[s].push(a[0][i])
}

}




for(i=0; i < b.length; i++){

if(b[i] == ""){break;}

if(b[i][0] == "1" && isNaN(b[i][1])){

b[i][0] = " "
one[1].push(b[i].join(''))
document.getElementById('reader1').innerHTML = " <b>(1) Their names are:</b>"+one[1]+"<br> "
}

if(b[i][0] == "2" && isNaN(b[i][1])){

b[i][0] = " "
one[2].push(b[i].join(''))
document.getElementById('reader2').innerHTML = " <b>(2) They are a/an:</b>"+one[2]+"<br> "
}


if(b[i][0] == "3" && isNaN(b[i][1])){

b[i][0] = " "
one[3].push(b[i].join(''))
document.getElementById('reader3').innerHTML = " <b>(3) They are:</b>"+one[3]+"<br> "
}


if(b[i][0] == "4" && isNaN(b[i][1])){

b[i][0] = " "
one[4].push(b[i].join(''))
document.getElementById('reader4').innerHTML = " <b>(4) They are in/on:</b>"+one[4]+"<br> "
}

if(b[i][0] == "5" && isNaN(b[i][1])){
b[i][0] = " "
one[5].push(b[i].join(''))
document.getElementById('reader5').innerHTML = " <b>(5) They are from:</b>"+one[5]+"<br> "
}

if(b[i][0] == "6" && isNaN(b[i][1])){
b[i][0] = " "
one[6].push(b[i].join(''))
document.getElementById('reader6').innerHTML = " <b>(6) Their birth/creation time/date:</b>"+one[6]+"<br> "
}


if(b[i][0] == "7" && isNaN(b[i][1])){
b[i][0] = " "
one[7].push(b[i].join(''))
document.getElementById('reader7').innerHTML = " <b>(7) Their birth/creation location:</b>"+one[7]+"<br> "
}


if(b[i][0] == "8" && isNaN(b[i][1])){
b[i][0] = " "
one[8].push(b[i].join(''))
document.getElementById('reader8').innerHTML = " <b>(8) They are interested in:</b>"+one[8]+"<br> "
}


if(b[i][0] == "9" && isNaN(b[i][1])){
b[i][0] = " "
one[9].push(b[i].join(''))
document.getElementById('reader9').innerHTML = " <b>(9) They love:</b>"+one[9]+"<br> "
}

if(b[i][0] == "1" && b[i][1] == "0" && isNaN(b[i][2])){
b[i][0] = " "
b[i][1] = ""
one[10].push(b[i].join(''))
document.getElementById('reader10').innerHTML = " <b>(10) They have to offer, give, or share:</b>"+one[10]+"<br> "
}

if(b[i][0] == "1" && b[i][1] == "1" && isNaN(b[i][2])){
b[i][0] = " "
b[i][1] = ""
one[11].push(b[i].join(''))
document.getElementById('reader11').innerHTML = " <b>(11) They have, own, or possess:</b>"+one[11]+"<br> "
}

if(b[i][0] == "1" && b[i][1] == "2" && isNaN(b[i][2])){
b[i][0] = " "
b[i][1] = ""
one[12].push(b[i].join(''))
document.getElementById('reader12').innerHTML = " <b>(12) Their birth/creation time/date:</b>"+one[12]+"<br> "
}


if(b[i][0] == "1" && b[i][1] == "3" && isNaN(b[i][2])){
b[i][0] = " "
b[i][1] = ""
one[13].push(b[i].join(''))
document.getElementById('reader13').innerHTML = " <b>(13) They are like/similar to(in any way):</b>"+one[13]+"<br> "
}

if(b[i][0] == "1" && b[i][1] == "4" && isNaN(b[i][2])){
b[i][0] = " "
b[i][1] = ""
one[14].push(b[i].join(''))
document.getElementById('reader14').innerHTML = ""
}

if(b[i][0] == "1" && b[i][1] == "5" && isNaN(b[i][2])){
b[i][0] = " "
b[i][1] = ""
one[15].push(b[i].join(''))
document.getElementById('reader15').innerHTML = ""
}

if(b[i][0] == "1" && b[i][1] == "6" && isNaN(b[i][2])){
b[i][0] = " "
b[i][1] = ""
one[16].push(b[i].join(''))
document.getElementById('reader16').innerHTML = ""
}

if(b[i][0] == "1" && b[i][1] == "7" && isNaN(b[i][2])){
b[i][0] = " "
b[i][1] = ""
one[17].push(b[i].join(''))
document.getElementById('reader17').innerHTML = ""
}

if(b[i][0] == "1" && b[i][1] == "8" && isNaN(b[i][2])){
b[i][0] = " "
b[i][1] = ""
one[18].push(b[i].join(''))
document.getElementById('reader18').innerHTML = ""
}

if(b[i][0] == "1" && b[i][1] == "9" && isNaN(b[i][2])){
b[i][0] = " "
b[i][1] = ""
one[19].push(b[i].join(''))
document.getElementById('reader19').innerHTML = ""
}


if(b[i][0] == "2" && b[i][1] == "0" && isNaN(b[i][2])){
b[i][0] = " "
b[i][1] = ""
one[20].push(b[i].join(''))
document.getElementById('reader20').innerHTML = ""
}


if(b[i][0] == "2" && b[i][1] == "1" && isNaN(b[i][2])){
b[i][0] = " "
b[i][1] = ""
one[21].push(b[i].join(''))
document.getElementById('reader21').innerHTML = " <b>(21) Looking for whose names are:</b>"+one[21]+"<br> "
}

if(b[i][0] == "2" && b[i][1] == "2" && isNaN(b[i][2])){
b[i][0] = " "
b[i][1] = ""
one[22].push(b[i].join(''))
document.getElementById('reader22').innerHTML = " <b>(22) Looking for who are a/an:</b>"+one[22]+"<br> "
}

if(b[i][0] == "2" && b[i][1] == "3" && isNaN(b[i][2])){
b[i][0] = " "
b[i][1] = ""
one[23].push(b[i].join(''))
document.getElementById('reader23').innerHTML = " <b>(23) Looking for who are:</b>"+one[23]+"<br> "
}

if(b[i][0] == "2" && b[i][1] == "4" && isNaN(b[i][2])){
b[i][0] = " "
b[i][1] = ""
one[24].push(b[i].join(''))
document.getElementById('reader24').innerHTML = " <b>(24) Looking for who are in/on:</b>"+one[24]+"<br> "
}

if(b[i][0] == "2" && b[i][1] == "5" && isNaN(b[i][2])){
b[i][0] = " "
b[i][1] = ""
one[25].push(b[i].join(''))
document.getElementById('reader25').innerHTML = " <b>(25) Looking for who are from:</b>"+one[25]+"<br> "
}

if(b[i][0] == "2" && b[i][1] == "6" && isNaN(b[i][2])){
b[i][0] = " "
b[i][1] = ""
one[26].push(b[i].join(''))
document.getElementById('reader26').innerHTML = " <b>(26) Looking for whose birth/creation time/date(s) are:</b>"+one[26]+"<br> "
}

if(b[i][0] == "2" && b[i][1] == "7" && isNaN(b[i][2])){
b[i][0] = " "
b[i][1] = ""
one[27].push(b[i].join(''))
document.getElementById('reader27').innerHTML = " <b>(27) Looking for whose birth/creation location is:</b>"+one[27]+"<br> "
}

if(b[i][0] == "2" && b[i][1] == "8" && isNaN(b[i][2])){
b[i][0] = " "
b[i][1] = ""
one[28].push(b[i].join(''))
document.getElementById('reader28').innerHTML = " <b>(28) Looking for who are interested in:</b>"+one[28]+"<br> "
}

if(b[i][0] == "2" && b[i][1] == "9" && isNaN(b[i][2])){
b[i][0] = " "
b[i][1] = ""
one[29].push(b[i].join(''))
document.getElementById('reader29').innerHTML = " <b>(29) Looking for who loves:</b>"+one[29]+"<br> "
}

if(b[i][0] == "3" && b[i][1] == "0" && isNaN(b[i][2])){
b[i][0] = " "
b[i][1] = ""
one[30].push(b[i].join(''))
document.getElementById('reader30').innerHTML = " <b>(30) Looking for who has to offer, give, or share:</b>"+one[30]+"<br> "
}

if(b[i][0] == "3" && b[i][1] == "1" && isNaN(b[i][2])){
b[i][0] = " "
b[i][1] = ""
one[31].push(b[i].join(''))
document.getElementById('reader31').innerHTML = " <b>(31) Looking for who has, owns, or possesses:</b>"+one[31]+"<br> "
}

if(b[i][0] == "3" && b[i][1] == "2" && isNaN(b[i][2])){
b[i][0] = " "
b[i][1] = ""
one[32].push(b[i].join(''))
document.getElementById('reader32').innerHTML = " <b>(32) Looking for who is looking for:</b>"+one[32]+"<br> "
}

if(b[i][0] == "3" && b[i][1] == "3" && isNaN(b[i][2])){
b[i][0] = " "
b[i][1] = ""
one[33].push(b[i].join(''))
document.getElementById('reader33').innerHTML = " <b>(33) Looking for who is like/similar to (in any way):</b>"+one[33]+"<br> "
}

if(b[i][0] == "3" && b[i][1] == "4" && isNaN(b[i][2])){
b[i][0] = " "
b[i][1] = ""
one[34].push(b[i].join(''))
document.getElementById('reader34').innerHTML = ""
}

if(b[i][0] == "3" && b[i][1] == "5" && isNaN(b[i][2])){
b[i][0] = " "
b[i][1] = ""
one[35].push(b[i].join(''))
document.getElementById('reader35').innerHTML = ""
}

if(b[i][0] == "3" && b[i][1] == "6" && isNaN(b[i][2])){
b[i][0] = " "
b[i][1] = ""
one[36].push(b[i].join(''))
document.getElementById('reader36').innerHTML = ""
}

if(b[i][0] == "3" && b[i][1] == "7" && isNaN(b[i][2])){
b[i][0] = " "
b[i][1] = ""
one[37].push(b[i].join(''))
document.getElementById('reader37').innerHTML = ""
}

if(b[i][0] == "3" && b[i][1] == "8" && isNaN(b[i][2])){
b[i][0] = " "
b[i][1] = ""
one[38].push(b[i].join(''))
document.getElementById('reader38').innerHTML = ""
}

if(b[i][0] == "3" && b[i][1] == "9" && isNaN(b[i][2])){
b[i][0] = " "
b[i][1] = ""
one[39].push(b[i].join(''))
document.getElementById('reader39').innerHTML = ""
}

if(b[i][0] == "4" && b[i][1] == "0" && isNaN(b[i][2])){
b[i][0] = " "
b[i][1] = ""
one[40].push(b[i].join(''))
document.getElementById('reader40').innerHTML = ""
}

if(b[i][0] == "4" && b[i][1] == "1" && isNaN(b[i][2])){
b[i][0] = " "
b[i][1] = ""
one[41].push(b[i].join(''))
document.getElementById('reader41').innerHTML = " <b>(41) Title/name of product/offer:</b>"+one[41]+"<br> "
}

if(b[i][0] == "4" && b[i][1] == "2" && isNaN(b[i][2])){
b[i][0] = " "
b[i][1] = ""
one[42].push(b[i].join(''))
document.getElementById('reader42').innerHTML = " <b>(42) Offer is a/an:</b>"+one[42]+"<br> "
}

if(b[i][0] == "4" && b[i][1] == "3" && isNaN(b[i][2])){
b[i][0] = " "
b[i][1] = ""
one[43].push(b[i].join(''))
document.getElementById('reader43').innerHTML = " <b>(43) Offer is:</b>"+one[43]+"<br> "
}

if(b[i][0] == "4" && b[i][1] == "4" && isNaN(b[i][2])){
b[i][0] = " "
b[i][1] = ""
one[44].push(b[i].join(''))
document.getElementById('reader44').innerHTML = " <b>(44) Location Offer will be:</b>"+one[44]+"<br> "
}

if(b[i][0] == "4" && b[i][1] == "5" && isNaN(b[i][2])){
b[i][0] = " "
b[i][1] = ""
one[45].push(b[i].join(''))
document.getElementById('reader45').innerHTML = " <b>(45) Time Offer will be:</b>"+one[45]+"<br> "
}

if(b[i][0] == "4" && b[i][1] == "6" && isNaN(b[i][2])){
b[i][0] = " "
b[i][1] = ""
one[46].push(b[i].join(''))
document.getElementById('reader46').innerHTML = " <b>(46) Offer gives or provides:</b>"+one[46]+"<br> "
}

if(b[i][0] == "4" && b[i][1] == "7" && isNaN(b[i][2])){
b[i][0] = " "
b[i][1] = ""
one[47].push(b[i].join(''))
document.getElementById('reader47').innerHTML = " <b>(47) Offer needs or requires:</b>"+one[47]+"<br> "
}

if(b[i][0] == "4" && b[i][1] == "8" && isNaN(b[i][2])){
b[i][0] = " "
b[i][1] = ""
one[48].push(b[i].join(''))
document.getElementById('reader48').innerHTML = " <b>(48) Offer has or contains:</b>"+one[48]+"<br> "
}

if(b[i][0] == "4" && b[i][1] == "9" && isNaN(b[i][2])){
b[i][0] = " "
b[i][1] = ""
one[49].push(b[i].join(''))
document.getElementById('reader49').innerHTML = " <b>(49) Product birth/creation time:</b>"+one[49]+"<br> "
}

if(b[i][0] == "5" && b[i][1] == "0" && isNaN(b[i][2])){
b[i][0] = " "
b[i][1] = ""
one[50].push(b[i].join(''))
document.getElementById('reader50').innerHTML = " <b>(50) Offer is by or from:</b>"+one[50]+"<br> "
}

if(b[i][0] == "5" && b[i][1] == "1" && isNaN(b[i][2])){
b[i][0] = " "
b[i][1] = ""
one[51].push(b[i].join(''))
document.getElementById('reader51').innerHTML = " <b>(51) Offer is about:</b>"+one[51]+"<br> "
}

if(b[i][0] == "5" && b[i][1] == "2" && isNaN(b[i][2])){
b[i][0] = " "
b[i][1] = ""
one[52].push(b[i].join(''))
document.getElementById('reader52').innerHTML = " <b>(52) Offer is like/similar to:</b>"+one[52]+"<br> "
}

if(b[i][0] == "5" && b[i][1] == "3" && isNaN(b[i][2])){
b[i][0] = " "
b[i][1] = ""
one[53].push(b[i].join(''))
document.getElementById('reader53').innerHTML = " <b>(53) Offer is for:</b>"+one[53]+"<br> "
}

if(b[i][0] == "5" && b[i][1] == "4" && isNaN(b[i][2])){
b[i][0] = " "
b[i][1] = ""
one[54].push(b[i].join(''))
document.getElementById('reader54').innerHTML = " <b>(54) Offer is to:</b>"+one[54]+"<br> "
}

if(b[i][0] == "5" && b[i][1] == "5" && isNaN(b[i][2])){
b[i][0] = " "
b[i][1] = ""
one[55].push(b[i].join(''))
document.getElementById('reader55').innerHTML = ""
}

if(b[i][0] == "5" && b[i][1] == "6" && isNaN(b[i][2])){
b[i][0] = " "
b[i][1] = ""
one[56].push(b[i].join(''))
document.getElementById('reader56').innerHTML = ""
}

if(b[i][0] == "5" && b[i][1] == "7" && isNaN(b[i][2])){
b[i][0] = " "
b[i][1] = ""
one[57].push(b[i].join(''))
document.getElementById('reader57').innerHTML = ""
}

if(b[i][0] == "5" && b[i][1] == "8" && isNaN(b[i][2])){
b[i][0] = " "
b[i][1] = ""
one[58].push(b[i].join(''))
document.getElementById('reader58').innerHTML = ""
}

if(b[i][0] == "5" && b[i][1] == "9" && isNaN(b[i][2])){
b[i][0] = " "
b[i][1] = ""
one[59].push(b[i].join(''))
document.getElementById('reader59').innerHTML = ""
}

if(b[i][0] == "6" && b[i][1] == "0" && isNaN(b[i][2])){
b[i][0] = " "
b[i][1] = ""
one[60].push(b[i].join(''))
document.getElementById('reader60').innerHTML = ""
}

if(b[i][0] == "6" && b[i][1] == "1" && isNaN(b[i][2])){
b[i][0] = " "
b[i][1] = ""
one[61].push(b[i].join(''))
document.getElementById('reader61').innerHTML = " <b>(61) Title/name of product/request:</b>"+one[61]+"<br> "
}

if(b[i][0] == "6" && b[i][1] == "2" && isNaN(b[i][2])){
b[i][0] = " "
b[i][1] = ""
one[62].push(b[i].join(''))
document.getElementById('reader62').innerHTML = " <b>(62) Request is a/an:</b>"+one[62]+"<br> "
}

if(b[i][0] == "6" && b[i][1] == "3" && isNaN(b[i][2])){
b[i][0] = " "
b[i][1] = ""
one[63].push(b[i].join(''))
document.getElementById('reader63').innerHTML = " <b>(63) Request is:</b>"+one[63]+"<br> "
}

if(b[i][0] == "6" && b[i][1] == "4" && isNaN(b[i][2])){
b[i][0] = " "
b[i][1] = ""
one[64].push(b[i].join(''))
document.getElementById('reader64').innerHTML = " <b>(64) Location Request will be:</b>"+one[64]+"<br> "
}

if(b[i][0] == "6" && b[i][1] == "5" && isNaN(b[i][2])){
b[i][0] = " "
b[i][1] = ""
one[65].push(b[i].join(''))
document.getElementById('reader65').innerHTML = " <b>(65) Time Request will be:</b>"+one[65]+"<br> "
}

if(b[i][0] == "6" && b[i][1] == "6" && isNaN(b[i][2])){
b[i][0] = " "
b[i][1] = ""
one[66].push(b[i].join(''))
document.getElementById('reader66').innerHTML = " <b>(66) Request gives or provides:</b>"+one[66]+"<br> "
}

if(b[i][0] == "6" && b[i][1] == "7" && isNaN(b[i][2])){
b[i][0] = " "
b[i][1] = ""
one[67].push(b[i].join(''))
document.getElementById('reader67').innerHTML = " <b>(67) Request needs or requires:</b>"+one[67]+"<br> "
}

if(b[i][0] == "6" && b[i][1] == "8" && isNaN(b[i][2])){
b[i][0] = " "
b[i][1] = ""
one[68].push(b[i].join(''))
document.getElementById('reader68').innerHTML = " <b>(68) Request has or contains:</b>"+one[68]+"<br> "
}

if(b[i][0] == "6" && b[i][1] == "9" && isNaN(b[i][2])){
b[i][0] = " "
b[i][1] = ""
one[69].push(b[i].join(''))
document.getElementById('reader69').innerHTML = " <b>(69) Request birth/creation time:</b>"+one[69]+"<br> "
}

if(b[i][0] == "7" && b[i][1] == "0" && isNaN(b[i][2])){
b[i][0] = " "
b[i][1] = ""
one[70].push(b[i].join(''))
document.getElementById('reader70').innerHTML = " <b>(70) Request is by or from:</b>"+one[70]+"<br> "
}

if(b[i][0] == "7" && b[i][1] == "1" && isNaN(b[i][2])){
b[i][0] = " "
b[i][1] = ""
one[71].push(b[i].join(''))
document.getElementById('reader71').innerHTML = " <b>(71) Request is by or from:</b>"+one[71]+"<br> "
}

if(b[i][0] == "7" && b[i][1] == "2" && isNaN(b[i][2])){
b[i][0] = " "
b[i][1] = ""
one[72].push(b[i].join(''))
document.getElementById('reader72').innerHTML = " <b>(72) Request is by or from:</b>"+one[72]+"<br> "
}

if(b[i][0] == "7" && b[i][1] == "3" && isNaN(b[i][2])){
b[i][0] = " "
b[i][1] = ""
one[73].push(b[i].join(''))
document.getElementById('reader73').innerHTML = " <b>(73) Request is by or from:</b>"+one[73]+"<br> "
}

if(b[i][0] == "7" && b[i][1] == "4" && isNaN(b[i][2])){
b[i][0] = " "
b[i][1] = ""
one[74].push(b[i].join(''))
document.getElementById('reader74').innerHTML = " <b>(74) Request is by or from:</b>"+one[74]+"<br> "
}

if(b[i][0] == "7" && b[i][1] == "5" && isNaN(b[i][2])){
b[i][0] = " "
b[i][1] = ""
one[75].push(b[i].join(''))
document.getElementById('reader75').innerHTML = ""
}

if(b[i][0] == "7" && b[i][1] == "6" && isNaN(b[i][2])){
b[i][0] = " "
b[i][1] = ""
one[76].push(b[i].join(''))
document.getElementById('reader76').innerHTML = ""
}

if(b[i][0] == "7" && b[i][1] == "7" && isNaN(b[i][2])){
b[i][0] = " "
b[i][1] = ""
one[77].push(b[i].join(''))
document.getElementById('reader77').innerHTML = ""
}

if(b[i][0] == "7" && b[i][1] == "8" && isNaN(b[i][2])){
b[i][0] = " "
b[i][1] = ""
one[78].push(b[i].join(''))
document.getElementById('reader78').innerHTML = ""
}

if(b[i][0] == "7" && b[i][1] == "9" && isNaN(b[i][2])){
b[i][0] = " "
b[i][1] = ""
one[79].push(b[i].join(''))
document.getElementById('reader79').innerHTML = ""
}

if(b[i][0] == "8" && b[i][1] == "0" && isNaN(b[i][2])){
b[i][0] = " "
b[i][1] = ""
one[80].push(b[i].join(''))
document.getElementById('reader80').innerHTML = ""
}

if(b[i][0] == "8" && b[i][1] == "1" && isNaN(b[i][2])){
b[i][0] = " "
b[i][1] = ""
one[81].push(b[i].join(''))
document.getElementById('reader81').innerHTML = "<b>(81) Contact or Meet me at location:</b>"+one[80]+"<br> "
}

if(b[i][0] == "8" && b[i][1] == "2" && isNaN(b[i][2])){
b[i][0] = " "
b[i][1] = ""
one[82].push(b[i].join(''))
document.getElementById('reader82').innerHTML = " <b>(82) Date/time(s) to contact or meet me:</b>"+one[81]+"<br>  "
}

if(b[i][0] == "8" && b[i][1] == "3" && isNaN(b[i][2])){
b[i][0] = " "
b[i][1] = ""
one[83].push(b[i].join(''))
document.getElementById('reader83').innerHTML = ""
}

if(b[i][0] == "8" && b[i][1] == "4" && isNaN(b[i][2])){
b[i][0] = " "
b[i][1] = ""
one[84].push(b[i].join(''))
document.getElementById('reader84').innerHTML = ""
}

if(b[i][0] == "8" && b[i][1] == "5" && isNaN(b[i][2])){
b[i][0] = " "
b[i][1] = ""
one[85].push(b[i].join(''))
document.getElementById('reader85').innerHTML = ""
}

if(b[i][0] == "8" && b[i][1] == "6" && isNaN(b[i][2])){
b[i][0] = " "
b[i][1] = ""
one[86].push(b[i].join(''))
document.getElementById('reader86').innerHTML = ""
}

if(b[i][0] == "8" && b[i][1] == "7" && isNaN(b[i][2])){
b[i][0] = " "
b[i][1] = ""
one[87].push(b[i].join(''))
document.getElementById('reader87').innerHTML = ""
}

if(b[i][0] == "8" && b[i][1] == "8" && isNaN(b[i][2])){
b[i][0] = " "
b[i][1] = ""
one[88].push(b[i].join(''))
document.getElementById('reader88').innerHTML = ""
}


if(b[i][0] == "8" && b[i][1] == "9" && isNaN(b[i][2])){
b[i][0] = " "
b[i][1] = ""
one[89].push(b[i].join(''))
document.getElementById('reader89').innerHTML = " <b>(89) Mobile Profile Creation Date/Time:</b>"+one[89]+"<br> "
}


}


}

</script>

@endsection