@extends('layouts.website.site')
@section('content')
<style>
table {
  width: 50%;
  border-collapse: collapse;
  border: 1px solid white;
}
div {

  word-wrap: break-word;
}


</style>
<br>
<div class="container-fluid" bg-dark text-light" style="color:white; background-color:#222222; width:100%;"><br>
  <center><h2 style="margin-top:0">TagiMagi.com Informational Sequences</h2></center>
  <center> 
 TagiMagi.com: tmi_s755b.123450123450123450123450123450123450123450123450123450123450123450123450123</center>
 </center><br>
 </div>

<div class="container-fluid" style="color:white; background-color:#282828; id=" translatesequence" style="width:50%; font-size: 25px">

<center>







<div class="container-fluid" id="wordConverter">

  </br><center><h2 id="translate-sequence">Sequence Reader:</h2>
  
Translate the meaning of a TM sequence. Paste in sequence below:<br>
 
  <br>
  
 <input type="text" id="seqrea" value="" placeholder="tmi_s755b.12345..."><br>
      <br>
  
<input type="button" onclick="sequencereader()" id="tmsequence" value="Sequence Reader" class="btn btn-primary">
   
    
  <br><br>
  
  <div id="sequencereaderd"></div>

</div>
</div>
  
 <div class="container-fluid bg-dark text-light" id="sequencecompare" style=" width:100%;"><br>
<center>
  <center><h2 id="compare-sequences">Sequence Compare</h2></center>
<label>
Get the net difference or similarity 
between two sequences. Paste the 
Sequences in the spaces below and 
 Click Compare Sequences.</label><br><br>
   
  
<input type="text" id="tmseqsubm1c" value=""><br>
      
<input type="text" id="tmseqsubm2c" value="
"><br>
       
<br>
    
  
  
  
  
<input type="button" onclick="compare()" value="Compare Sequences" class="btn btn-primary">
<br>
   
  <br>
  
  <div id="sequencecompared"></div>

</div>

<div class="container-fluid" style="color:white; background-color:#282828; id=" sequencecreate" style="width:50%; font-size: 25px">
<center>
<br>

   <h2><b id<b id="create-sequence-tag">Create Sequence Tag:</b></h2>
  
 <b> Create your unique TM sequence tag, fill out the following parameters 
  below and then click Create TM Sequence. 75 questions/scales<br><br>
  
  <input type="radio" name="pp" id="iseq" checked="true"> Individual <br>
 <input type="radio" name="pp" id="cseq"> Couple/Trio <br>
 <input type="radio" name="pp" id="gseq"> Group <br>
    <br>
  Our scale numbers and their meaning:<br>

  <table style="text-align:center; color:white">
  
    <tr>
  <td></td><td> 1 </td>
 <td> 2 </td>
 <td> 3 </td>
    <td> 4 </td>
 <td> 5 </td>
      <td> 0 </td>
    </tr>
     <tr>
  <td></td><td> <input type="radio" name="0" value="1"> </td>
 <td> <input type="radio" name="0" value="2"> </td>
 <td> <input type="radio" name="0" value="3"> </td>
    <td> <input type="radio" name="0" value="4"> </td>
 <td> <input type="radio" name="0" value="5"> </td>
       <td> <input type="radio" name="0" value="0"> </td>   
    </tr>
       <tr>
  <td></td><td> <font color="white">No</font></td>
 <td> Hardly </td>
 <td> Neutral </td>
    <td> Somewhat </td>
 <td> Yes </td><td>Skip</td>
    </tr>
    </table>
    
  <br><font>
  Choose which terms relate to you or describe you or not. <br> If you do not relate to it, click to the left (No). <br>
  If you do relate to it, click to the right (Yes). <br>
   If you would like to skip it, select Skip.</b><br><br>
  
  
  <table style="text-align:center; color:white"><tr>
   <td colspan="9" style="background-color:#FA87E7"><b> Universal:</b></td></tr><tr>
  <td>No</td><td> <input type="radio" name="1" value="1" id="11"> </td>
 <td> <input type="radio" name="1" value="2" id="12"> </td>
 <td> <input type="radio" name="1" value="3" checked id="13"> </td>
    <td> <input type="radio" name="1" value="4" id="14"> </td>
 <td> <input type="radio" name="1" value="5" id="15"> </td><td>Yes</td>
    <td> <input type="radio" name="1" value="0" id="10"> </td><td>Skip</td>
 
    </tr>
    </table>
    
  
<table style="text-align:center; color:white"><tr>
   <td colspan="9" style="background-color:#AB149C"><b>Religious:</b></td></tr><tr>
  <td>No</td><td> <input type="radio" name="2" value="1" id="21"> </td>
 <td> <input type="radio" name="2" value="2" id="22"> </td>
 <td> <input type="radio" name="2" value="3" checked id="23"> </td>
    <td> <input type="radio" name="2" value="4" id="24"> </td>
 <td> <input type="radio" name="2" value="5" id="25"> </td><td>Yes</td>
    <td> <input type="radio" name="2" value="0" id="20"> </td><td>Skip</td>
 
    </tr>
    </table>
  
  <table style="text-align:center; color:white"><tr>
   <td colspan="9" style="background-color:#A114AB"><b>Intuitive:</b></td></tr><tr>
  <td>No</td><td> <input type="radio" name="3" value="1" id="31"> </td>
 <td> <input type="radio" name="3" value="2" id="32"> </td>
 <td> <input type="radio" name="3" value="3" checked id="33"> </td>
    <td> <input type="radio" name="3" value="4" id="34"> </td>
 <td> <input type="radio" name="3" value="5" id="35"> </td><td>Yes</td>
    <td> <input type="radio" name="3" value="0" id="30"> </td><td>Skip</td>
 
    </tr>
    </table>
  
  
  <table style="text-align:center; color:white"><tr>
   <td colspan="9" style="background-color:#9214AB"><b>Spiritual:</b></td></tr><tr>
  <td>No</td><td> <input type="radio" name="4" value="1" id="41"> </td>
 <td> <input type="radio" name="4" value="2" id="42"> </td>
 <td> <input type="radio" name="4" value="3" checked id="43"> </td>
    <td> <input type="radio" name="4" value="4" id="44"> </td>
 <td> <input type="radio" name="4" value="5" id="45"> </td><td>Yes</td>
    <td> <input type="radio" name="4" value="0" id="40"> </td><td>Skip</td>
 
    </tr>
    </table>
  
  
  
   <table style="text-align:center; color:white"><tr>
   <td colspan="9" style="background-color:#8314AB"><b>Contemplative:</b></td></tr><tr>
  <td>No</td><td> <input type="radio" name="5" value="1" id="51"> </td>
 <td> <input type="radio" name="5" value="2" id="52"> </td>
 <td> <input type="radio" name="5" value="3" checked id="53"> </td>
    <td> <input type="radio" name="5" value="4" id="54"> </td>
 <td> <input type="radio" name="5" value="5" id="55"> </td><td>Yes</td>
    <td> <input type="radio" name="5" value="0" id="50"> </td><td>Skip</td>
 
    </tr>
    </table>
  
  
  
  <table style="text-align:center; color:white"><tr>
   <td colspan="9" style="background-color:#7414AB"><b>Logic:</b></td></tr><tr>
  <td>No</td><td> <input type="radio" name="6" value="1" id="61"> </td>
 <td> <input type="radio" name="6" value="2" id="62"> </td>
 <td> <input type="radio" name="6" value="3" checked id="63"> </td>
    <td> <input type="radio" name="6" value="4" id="64"> </td>
 <td> <input type="radio" name="6" value="5" id="65"> </td><td>Yes</td>
    <td> <input type="radio" name="6" value="0" id="60"> </td><td>Skip</td>
 
    </tr>
    </table>
  
  
   <table style="text-align:center; color:white"><tr>
   <td colspan="9" style="background-color:#6014AB"><b>Avid Reader:</b></td></tr><tr>
  <td>No</td><td> <input type="radio" name="7" value="1" id="71"> </td>
 <td> <input type="radio" name="7" value="2" id="72"> </td>
 <td> <input type="radio" name="7" value="3" checked id="73"> </td>
    <td> <input type="radio" name="7" value="4" id="74"> </td>
 <td> <input type="radio" name="7" value="5" id="75"> </td><td>Yes</td>
    <td> <input type="radio" name="7" value="0" id="70"> </td><td>Skip</td>
 
    </tr>
    </table>
  
  
  
   <table style="text-align:center; color:white"><tr>
   <td colspan="9" style="background-color:#5614AB"><b>Sensing, Sensual:</b></td></tr><tr>
  <td>No</td><td> <input type="radio" name="8" value="1" id="81"> </td>
 <td> <input type="radio" name="8" value="2" id="82"> </td>
 <td> <input type="radio" name="8" value="3" checked id="83"> </td>
    <td> <input type="radio" name="8" value="4" id="84"> </td>
 <td> <input type="radio" name="8" value="5" id="85"> </td><td>Yes</td>
    <td> <input type="radio" name="8" value="0" id="80"> </td><td>Skip</td>
 
    </tr>
    </table>
  
  
  
  
  
   <table style="text-align:center; color:white"><tr>
   <td colspan="9" style="background-color:#5114AB"><b>Historian:</b></td></tr><tr>
  <td>No</td><td> <input type="radio" name="9" value="1" id="91"> </td>
 <td> <input type="radio" name="9" value="2" id="92"> </td>
 <td> <input type="radio" name="9" value="3" checked id="93"> </td>
    <td> <input type="radio" name="9" value="4" id="94"> </td>
 <td> <input type="radio" name="9" value="5" id="95"> </td><td>Yes</td>
    <td> <input type="radio" name="9" value="0" id="90"> </td><td>Skip</td>
 
    </tr>
    </table>
  
  
  <table style="text-align:center; color:white"><tr>
   <td colspan="9" style="background-color:#4C14AB"><b>Science:</b></td></tr><tr>
  <td>No</td><td> <input type="radio" name="10" value="1" id="101"> </td>
 <td> <input type="radio" name="10" value="2" id="102"> </td>
 <td> <input type="radio" name="10" value="3" checked id="103"> </td>
    <td> <input type="radio" name="10" value="4" id="104"> </td>
 <td> <input type="radio" name="10" value="5" id="105"> </td><td>Yes</td>
    <td> <input type="radio" name="10" value="0" id="100"> </td><td>Skip</td>
 
    </tr>
    </table>
  
  
    <table style="text-align:center; color:white"><tr>
   <td colspan="9" style="background-color:#4614AB"><b>Mechanical:</b></td></tr><tr>
  <td>No</td><td> <input type="radio" name="11" value="1" id="111"> </td>
 <td> <input type="radio" name="11" value="2" id="112"> </td>
 <td> <input type="radio" name="11" value="3" checked id="113"> </td>
    <td> <input type="radio" name="11" value="4" id="114"> </td>
 <td> <input type="radio" name="11" value="5" id="115"> </td><td>Yes</td>
    <td> <input type="radio" name="11" value="0" id="110"> </td><td>Skip</td>
 
    </tr>
    </table>
  
  
  <table style="text-align:center; color:white"><tr>
   <td colspan="9" style="background-color:#4C14AB"><b>Technology:</b></td></tr><tr>
  <td>No</td><td> <input type="radio" name="12" value="1" id="121"> </td>
 <td> <input type="radio" name="12" value="2" id="122"> </td>
 <td> <input type="radio" name="12" value="3" checked id="123"> </td>
    <td> <input type="radio" name="12" value="4" id="124"> </td>
 <td> <input type="radio" name="12" value="5" id="125"> </td><td>Yes</td>
    <td> <input type="radio" name="12" value="0" id="120"> </td><td>Skip</td>
 
    </tr>
    </table>
  
  
   <table style="text-align:center; color:white"><tr>
   <td colspan="9" style="background-color:#4114AB"><b>Traditional:</b></td></tr><tr>
  <td>No</td><td> <input type="radio" name="13" value="1" id="131"> </td>
 <td> <input type="radio" name="13" value="2" id="132"> </td>
 <td> <input type="radio" name="13" value="3" checked id="133"> </td>
    <td> <input type="radio" name="13" value="4" id="134"> </td>
 <td> <input type="radio" name="13" value="5" id="135"> </td><td>Yes</td>
    <td> <input type="radio" name="13" value="0" id="130"> </td><td>Skip</td>
 
    </tr>
    </table>
  
  
  <table style="text-align:center; color:white"><tr>
   <td colspan="9" style="background-color:#2D14AB"><b>Collectivist:</b></td></tr><tr>
  <td>No</td><td> <input type="radio" name="14" value="1" id="141"> </td>
 <td> <input type="radio" name="14" value="2" id="142"> </td>
 <td> <input type="radio" name="14" value="3" checked id="143"> </td>
    <td> <input type="radio" name="14" value="4" id="144"> </td>
 <td> <input type="radio" name="14" value="5" id="145"> </td><td>Yes</td>
    <td> <input type="radio" name="14" value="0" id="140"> </td><td>Skip</td>
 
    </tr>
    </table>
  
  
  
  <table style="text-align:center; color:white"><tr>
   <td colspan="9" style="background-color:#1414AB"><b>Individualist:</b></td></tr><tr>
  <td>No</td><td> <input type="radio" name="15" value="1" id="151"> </td>
 <td> <input type="radio" name="15" value="2" id="152"> </td>
 <td> <input type="radio" name="15" value="3" checked id="153"> </td>
    <td> <input type="radio" name="15" value="4" id="154"> </td>
 <td> <input type="radio" name="15" value="5" id="155"> </td><td>Yes</td>
    <td> <input type="radio" name="15" value="0" id="150"> </td><td>Skip</td>
 
    </tr>
    </table>
  
  
   <table style="text-align:center; color:white"><tr>
   <td colspan="9" style="background-color:#1428AB"><b>Inventor or creator:</b></td></tr><tr>
  <td>No</td><td> <input type="radio" name="16" value="1" id="161"> </td>
 <td> <input type="radio" name="16" value="2" id="162"> </td>
 <td> <input type="radio" name="16" value="3" checked id="163"> </td>
    <td> <input type="radio" name="16" value="4" id="164"> </td>
 <td> <input type="radio" name="16" value="5" id="165"> </td><td>Yes</td>
    <td> <input type="radio" name="16" value="0" id="160"> </td><td>Skip</td>
 
    </tr>
    </table>
  
  
   <table style="text-align:center; color:white"><tr>
   <td colspan="9" style="background-color:#1432AB"><b>Business (economics):</b></td></tr><tr>
  <td>No</td><td> <input type="radio" name="17" value="1" id="171"> </td>
 <td> <input type="radio" name="17" value="2" id="172"> </td>
 <td> <input type="radio" name="17" value="3" checked id="173"> </td>
    <td> <input type="radio" name="17" value="4" id="174"> </td>
 <td> <input type="radio" name="17" value="5" id="175"> </td><td>Yes</td>
    <td> <input type="radio" name="17" value="0" id="170"> </td><td>Skip</td>
 
    </tr>
    </table>
  
  
   <table style="text-align:center; color:white"><tr>
   <td colspan="9" style="background-color:#1446AB"><b>Nonprofit:</b></td></tr><tr>
  <td>No</td><td> <input type="radio" name="18" value="1" id="181"> </td>
 <td> <input type="radio" name="18" value="2" id="182"> </td>
 <td> <input type="radio" name="18" value="3" checked id="183"> </td>
    <td> <input type="radio" name="18" value="4" id="184"> </td>
 <td> <input type="radio" name="18" value="5" id="185"> </td><td>Yes</td>
    <td> <input type="radio" name="18" value="0" id="180"> </td><td>Skip</td>
 
    </tr>
    </table>
  
  
  <table style="text-align:center; color:white"><tr>
   <td colspan="9" style="background-color:#145BAB"><b>Director:</b></td></tr><tr>
  <td>No</td><td> <input type="radio" name="19" value="1" id="191"> </td>
 <td> <input type="radio" name="19" value="2" id="192"> </td>
 <td> <input type="radio" name="19" value="3" checked id="193"> </td>
    <td> <input type="radio" name="19" value="4" id="194"> </td>
 <td> <input type="radio" name="19" value="5" id="195"> </td><td>Yes</td>
    <td> <input type="radio" name="19" value="0" id="190"> </td><td>Skip</td>
 
    </tr>
    </table>
  
  
   <table style="text-align:center; color:white"><tr>
   <td colspan="9" style="background-color:#146FAB"><b>Legal Aid/Law:</b></td></tr><tr>
  <td>No</td><td> <input type="radio" name="20" value="1" id="201"> </td>
 <td> <input type="radio" name="20" value="2" id="202"> </td>
 <td> <input type="radio" name="20" value="3" checked id="203"> </td>
    <td> <input type="radio" name="20" value="4" id="204"> </td>
 <td> <input type="radio" name="20" value="5" id="205"> </td><td>Yes</td>
    <td> <input type="radio" name="20" value="0" id="200"> </td><td>Skip</td>
 
    </tr>
    </table>
  
  
  
   <table style="text-align:center; color:white"><tr>
   <td colspan="9" style="background-color:#148DAB"><b>Healer:</b></td></tr><tr>
  <td>No</td><td> <input type="radio" name="21" value="1" id="211"> </td>
 <td> <input type="radio" name="21" value="2" id="212"> </td>
 <td> <input type="radio" name="21" value="3" checked id="213"> </td>
    <td> <input type="radio" name="21" value="4" id="214"> </td>
 <td> <input type="radio" name="21" value="5" id="215"> </td><td>Yes</td>
    <td> <input type="radio" name="21" value="0" id="210"> </td><td>Skip</td>
 
    </tr>
    </table>
  
  
  
   <table style="text-align:center; color:white"><tr>
   <td colspan="9" style="background-color:#14A6AB"><b>Teacher:</b></td></tr><tr>
  <td>No</td><td> <input type="radio" name="22" value="1" id="221"> </td>
 <td> <input type="radio" name="22" value="2" id="222"> </td>
 <td> <input type="radio" name="22" value="3" checked id="223"> </td>
    <td> <input type="radio" name="22" value="4" id="224"> </td>
 <td> <input type="radio" name="22" value="5" id="225"> </td><td>Yes</td>
    <td> <input type="radio" name="22" value="0" id="220"> </td><td>Skip</td>
 
    </tr>
    </table>
  
  
   <table style="text-align:center; color:white"><tr>
   <td colspan="9" style="background-color:#14ABA1"><b>Gamer:</b></td></tr><tr>
  <td>No</td><td> <input type="radio" name="23" value="1" id="231"> </td>
 <td> <input type="radio" name="23" value="2" id="232"> </td>
 <td> <input type="radio" name="23" value="3" checked id="233"> </td>
    <td> <input type="radio" name="23" value="4" id="234"> </td>
 <td> <input type="radio" name="23" value="5" id="235"> </td><td>Yes</td>
    <td> <input type="radio" name="23" value="0" id="230"> </td><td>Skip</td>
 
    </tr>
    </table>
  
  
    <table style="text-align:center; color:white"><tr>
   <td colspan="9" style="background-color:#14AB83"><b>Music Lover</b></td></tr><tr>
  <td>No</td><td> <input type="radio" name="24" value="1" id="241"> </td>
 <td> <input type="radio" name="24" value="2" id="242"> </td>
 <td> <input type="radio" name="24" value="3" checked id="243"> </td>
    <td> <input type="radio" name="24" value="4" id="244"> </td>
 <td> <input type="radio" name="24" value="5" id="245"> </td><td>Yes</td>
    <td> <input type="radio" name="24" value="0" id="240"> </td><td>Skip</td>
 
    </tr>
    </table>
  
  
  <table style="text-align:center; color:white"><tr>
   <td colspan="9" style="background-color:#14AB6A"><b>Movie Lover:</b></td></tr><tr>
  <td>No</td><td> <input type="radio" name="25" value="1" id="251"> </td>
 <td> <input type="radio" name="25" value="2" id="252"> </td>
 <td> <input type="radio" name="25" value="3" checked id="253"> </td>
    <td> <input type="radio" name="25" value="4" id="254"> </td>
 <td> <input type="radio" name="25" value="5" id="255"> </td><td>Yes</td>
    <td> <input type="radio" name="25" value="0" id="250"> </td><td>Skip</td>
 
    </tr>
    </table>
  
  
   <table style="text-align:center; color:white"><tr>
   <td colspan="9" style="background-color:#14AB5B"><b>Competitive:</b></td></tr><tr>
  <td>No</td><td> <input type="radio" name="26" value="1" id="261"> </td>
 <td> <input type="radio" name="26" value="2" id="262"> </td>
 <td> <input type="radio" name="26" value="3" checked id="263"> </td>
    <td> <input type="radio" name="26" value="4" id="264"> </td>
 <td> <input type="radio" name="26" value="5" id="265"> </td><td>Yes</td>
    <td> <input type="radio" name="26" value="0" id="260"> </td><td>Skip</td>
 
    </tr>
    </table>
  
  
  
   <table style="text-align:center; color:white"><tr>
   <td colspan="9" style="background-color:#14AB41"><b>Social:</b></td></tr><tr>
  <td>No</td><td> <input type="radio" name="27" value="1" id="271"> </td>
 <td> <input type="radio" name="27" value="2" id="272"> </td>
 <td> <input type="radio" name="27" value="3" checked id="273"> </td>
    <td> <input type="radio" name="27" value="4" id="274"> </td>
 <td> <input type="radio" name="27" value="5" id="275"> </td><td>Yes</td>
    <td> <input type="radio" name="27" value="0" id="270"> </td><td>Skip</td>
 
    </tr>
    </table>
  
  
  <table style="text-align:center; color:white"><tr>
   <td colspan="9" style="background-color:#14AB28"><b>Social Performer:</b></td></tr><tr>
  <td>No</td><td> <input type="radio" name="28" value="1" id="281"> </td>
 <td> <input type="radio" name="28" value="2" id="282"> </td>
 <td> <input type="radio" name="28" value="3" checked id="283"> </td>
    <td> <input type="radio" name="28" value="4" id="284"> </td>
 <td> <input type="radio" name="28" value="5" id="285"> </td><td>Yes</td>
    <td> <input type="radio" name="28" value="0" id="280"> </td><td>Skip</td>
 
    </tr>
    </table>
  
  
   <table style="text-align:center; color:white"><tr>
   <td colspan="9" style="background-color:#14AB23"><b>Common, normal:</b></td></tr><tr>
  <td>No</td><td> <input type="radio" name="29" value="1" id="291"> </td>
 <td> <input type="radio" name="29" value="2" id="292"> </td>
 <td> <input type="radio" name="29" value="3" checked id="293"> </td>
    <td> <input type="radio" name="29" value="4" id="294"> </td>
 <td> <input type="radio" name="29" value="5" id="295"> </td><td>Yes</td>
    <td> <input type="radio" name="29" value="0" id="290"> </td><td>Skip</td>
 
    </tr>
    </table>
  
  
   <table style="text-align:center; color:white"><tr>
   <td colspan="9" style="background-color:#14AB14"><b>Animal Socializing:</b></td></tr><tr>
  <td>No</td><td> <input type="radio" name="30" value="1" id="301"> </td>
 <td> <input type="radio" name="30" value="2" id="302"> </td>
 <td> <input type="radio" name="30" value="3" checked id="303"> </td>
    <td> <input type="radio" name="30" value="4" id="304"> </td>
 <td> <input type="radio" name="30" value="5" id="305"> </td><td>Yes</td>
    <td> <input type="radio" name="30" value="0" id="300"> </td><td>Skip</td>
 
    </tr>
    </table>
  
  
   <table style="text-align:center; color:white"><tr>
   <td colspan="9" style="background-color:#1EAB14"><b>Higher Intelligences:</b></td></tr><tr>
  <td>No</td><td> <input type="radio" name="31" value="1" id="311"> </td>
 <td> <input type="radio" name="31" value="2" id="312"> </td>
 <td> <input type="radio" name="31" value="3" checked id="313"> </td>
    <td> <input type="radio" name="31" value="4" id="314"> </td>
 <td> <input type="radio" name="31" value="5" id="315"> </td><td>Yes</td>
    <td> <input type="radio" name="31" value="0" id="310"> </td><td>Skip</td>
 
    </tr>
    </table>
  
  
   <table style="text-align:center; color:white"><tr>
   <td colspan="9" style="background-color:#23AB14"><b>Chef:</b></td></tr><tr>
  <td>No</td><td> <input type="radio" name="32" value="1" id="321"> </td>
 <td> <input type="radio" name="32" value="2" id="322"> </td>
 <td> <input type="radio" name="32" value="3" checked id="323"> </td>
    <td> <input type="radio" name="32" value="4" id="324"> </td>
 <td> <input type="radio" name="32" value="5" id="325"> </td><td>Yes</td>
    <td> <input type="radio" name="32" value="0" id="320"> </td><td>Skip</td>
 
    </tr>
    </table>
  
  
  
   <table style="text-align:center; color:white"><tr>
   <td colspan="9" style="background-color:#2DAB14"><b>Vegan:</b></td></tr><tr>
  <td>No</td><td> <input type="radio" name="33" value="1" id="331"> </td>
 <td> <input type="radio" name="33" value="2" id="332"> </td>
 <td> <input type="radio" name="33" value="3" checked id="333"> </td>
    <td> <input type="radio" name="33" value="4" id="334"> </td>
 <td> <input type="radio" name="33" value="5" id="335"> </td><td>Yes</td>
    <td> <input type="radio" name="33" value="0" id="330"> </td><td>Skip</td>
 
    </tr>
    </table>
  
  
   <table style="text-align:center; color:white"><tr>
   <td colspan="9" style="background-color:#32AB14"><b>Organic Food:</b></td></tr><tr>
  <td>No</td><td> <input type="radio" name="34" value="1" id="341"> </td>
 <td> <input type="radio" name="34" value="2" id="342"> </td>
 <td> <input type="radio" name="34" value="3" checked id="343"> </td>
    <td> <input type="radio" name="34" value="4" id="344"> </td>
 <td> <input type="radio" name="34" value="5" id="345"> </td><td>Yes</td>
    <td> <input type="radio" name="34" value="0" id="340"> </td><td>Skip</td>
 
    </tr>
    </table>
  
  
  <table style="text-align:center; color:white"><tr>
   <td colspan="9" style="background-color:#3CAB14"><b>Processed Food:</b></td></tr><tr>
  <td>No</td><td> <input type="radio" name="35" value="1" id="351"> </td>
 <td> <input type="radio" name="35" value="2" id="352"> </td>
 <td> <input type="radio" name="35" value="3" checked id="353"> </td>
    <td> <input type="radio" name="35" value="4" id="354"> </td>
 <td> <input type="radio" name="35" value="5" id="355"> </td><td>Yes</td>
    <td> <input type="radio" name="35" value="0" id="350"> </td><td>Skip</td>
 
    </tr>
    </table>
  
  
   <table style="text-align:center; color:white"><tr>
   <td colspan="9" style="background-color:#4CAB14"><b>Carnivorous:</b></td></tr><tr>
  <td>No</td><td> <input type="radio" name="36" value="1" id="361"> </td>
 <td> <input type="radio" name="36" value="2" id="362"> </td>
 <td> <input type="radio" name="36" value="3" checked id="363"> </td>
    <td> <input type="radio" name="36" value="4" id="364"> </td>
 <td> <input type="radio" name="36" value="5" id="365"> </td><td>Yes</td>
    <td> <input type="radio" name="36" value="0" id="360"> </td><td>Skip</td>
 
    </tr>
    </table>
  
  
   <table style="text-align:center; color:white"><tr>
   <td colspan="9" style="background-color:#5BAB14"><b>Happy:</b></td></tr><tr>
  <td>No</td><td> <input type="radio" name="37" value="1" id="371"> </td>
 <td> <input type="radio" name="37" value="2" id="372"> </td>
 <td> <input type="radio" name="37" value="3" checked id="373"> </td>
    <td> <input type="radio" name="37" value="4" id="374"> </td>
 <td> <input type="radio" name="37" value="5" id="375"> </td><td>Yes</td>
    <td> <input type="radio" name="37" value="0" id="370"> </td><td>Skip</td>
 
    </tr>
    </table>
  
  
   <table style="text-align:center; color:white"><tr>
   <td colspan="9" style="background-color:#65AB14"><b>Caring:</b></td></tr><tr>
  <td>No</td><td> <input type="radio" name="38" value="1" id="381"> </td>
 <td> <input type="radio" name="38" value="2" id="382"> </td>
 <td> <input type="radio" name="38" value="3" checked id="383"> </td>
    <td> <input type="radio" name="38" value="4" id="384"> </td>
 <td> <input type="radio" name="38" value="5" id="385"> </td><td>Yes</td>
    <td> <input type="radio" name="38" value="0" id="380"> </td><td>Skip</td>
 
    </tr>
    </table>
  
  
  
  <table style="text-align:center; color:white"><tr>
   <td colspan="9" style="background-color:#6AAB14"><b>Humorous/joking:</b></td></tr><tr>
  <td>No</td><td> <input type="radio" name="39" value="1" id="391"> </td>
 <td> <input type="radio" name="39" value="2" id="392"> </td>
 <td> <input type="radio" name="39" value="3" checked id="393"> </td>
    <td> <input type="radio" name="39" value="4" id="394"> </td>
 <td> <input type="radio" name="39" value="5" id="395"> </td><td>Yes</td>
    <td> <input type="radio" name="39" value="0" id="390"> </td><td>Skip</td>
 
    </tr>
    </table>
  
  
  <table style="text-align:center; color:white"><tr>
   <td colspan="9" style="background-color:#6FAB14"><b>Serious:</b></td></tr><tr>
  <td>No</td><td> <input type="radio" name="40" value="1" id="401"> </td>
 <td> <input type="radio" name="40" value="2" id="402"> </td>
 <td> <input type="radio" name="40" value="3" checked id="403"> </td>
    <td> <input type="radio" name="40" value="4" id="404"> </td>
 <td> <input type="radio" name="40" value="5" id="405"> </td><td>Yes</td>
    <td> <input type="radio" name="40" value="0" id="400"> </td><td>Skip</td>
 
    </tr>
    </table>
  
  
   <table style="text-align:center; color:white"><tr>
   <td colspan="9" style="background-color:#74AB14"><b>Assertive:</b></td></tr><tr>
  <td>No</td><td> <input type="radio" name="41" value="1" id="411"> </td>
 <td> <input type="radio" name="41" value="2" id="412"> </td>
 <td> <input type="radio" name="41" value="3" checked id="413"> </td>
    <td> <input type="radio" name="41" value="4" id="414"> </td>
 <td> <input type="radio" name="41" value="5" id="415"> </td><td>Yes</td>
    <td> <input type="radio" name="41" value="0" id="410"> </td><td>Skip</td>
 
    </tr>
    </table>
  
  
  <table style="text-align:center; color:white"><tr>
   <td colspan="9" style="background-color:#83AB14"><b>Looking for a Serious Relationship</b></td></tr><tr>
  <td>No</td><td> <input type="radio" name="42" value="1" id="421"> </td>
 <td> <input type="radio" name="42" value="2" id="422"> </td>
 <td> <input type="radio" name="42" value="3" checked id="423"> </td>
    <td> <input type="radio" name="42" value="4" id="424"> </td>
 <td> <input type="radio" name="42" value="5" id="425"> </td><td>Yes</td>
    <td> <input type="radio" name="42" value="0" id="420"> </td><td>Skip</td>
 
    </tr>
    </table>
  
  
  <table style="text-align:center; color:white"><tr>
   <td colspan="9" style="background-color:#8DAB14"><b>Promiscuous:</b></td></tr><tr>
  <td>No</td><td> <input type="radio" name="43" value="1" id="431"> </td>
 <td> <input type="radio" name="43" value="2" id="432"> </td>
 <td> <input type="radio" name="43" value="3" checked id="433"> </td>
    <td> <input type="radio" name="43" value="4" id="434"> </td>
 <td> <input type="radio" name="43" value="5" id="435"> </td><td>Yes</td>
    <td> <input type="radio" name="43" value="0" id="430"> </td><td>Skip</td>
 
    </tr>
    </table>
  
  
  <table style="text-align:center; color:white"><tr>
   <td colspan="9" style="background-color:#92AB14"><b>Heterosexual:</b></td></tr><tr>
  <td>No</td><td> <input type="radio" name="44" value="1" id="441"> </td>
 <td> <input type="radio" name="44" value="2" id="442"> </td>
 <td> <input type="radio" name="44" value="3" checked id="443"> </td>
    <td> <input type="radio" name="44" value="4" id="444"> </td>
 <td> <input type="radio" name="44" value="5" id="445"> </td><td>Yes</td>
    <td> <input type="radio" name="44" value="0" id="440"> </td><td>Skip</td>
 
    </tr>
    </table>
  
  
  
  <table style="text-align:center; color:white"><tr>
   <td colspan="9" style="background-color:#9CAB14"><b>Homosexual:</b></td></tr><tr>
  <td>No</td><td> <input type="radio" name="45" value="1" id="451"> </td>
 <td> <input type="radio" name="45" value="2" id="452"> </td>
 <td> <input type="radio" name="45" value="3" checked id="453"> </td>
    <td> <input type="radio" name="45" value="4" id="454"> </td>
 <td> <input type="radio" name="45" value="5" id="455"> </td><td>Yes</td>
    <td> <input type="radio" name="45" value="0" id="450"> </td><td>Skip</td>
 
    </tr>
    </table>
  
 <table style="text-align:center; color:white"><tr>
   <td colspan="9" style="background-color:#ABAB14"><b> Have very outward reproductive organs (e.g. xy):</b></td></tr><tr>
  <td>No</td><td> <input type="radio" name="46" value="1" id="461"> </td>
 <td> <input type="radio" name="46" value="2" id="462"> </td>
 <td> <input type="radio" name="46" value="3" checked id="463"> </td>
    <td> <input type="radio" name="46" value="4" id="464"> </td>
 <td> <input type="radio" name="46" value="5" id="465"> </td><td>Yes</td>
    <td> <input type="radio" name="46" value="0" id="460"> </td><td>Skip</td>
 
    </tr>
    </table>
    
  
  <table style="text-align:center; color:white"><tr>
   <td colspan="9" style="background-color:#D0D002"><b> Have very inward reproductive organs (e.g. xx):</b></td></tr><tr>
  <td>No</td><td> <input type="radio" name="47" value="1" id="471"> </td>
 <td> <input type="radio" name="47" value="2" id="472"> </td>
 <td> <input type="radio" name="47" value="3" checked id="473"> </td>
    <td> <input type="radio" name="47" value="4" id="474"> </td>
 <td> <input type="radio" name="47" value="5" id="475"> </td><td>Yes</td>
    <td> <input type="radio" name="47" value="0" id="470"> </td><td>Skip</td>
 
    </tr>
    </table>
  
 <table style="text-align:center; color:white"><tr>
   <td colspan="9" style="background-color:#D0D002"><b> Above average weight:</b></td></tr><tr>
  <td>No</td><td> <input type="radio" name="48" value="1" id="481"> </td>
 <td> <input type="radio" name="48" value="2" id="482"> </td>
 <td> <input type="radio" name="48" value="3" checked id="483"> </td>
    <td> <input type="radio" name="48" value="4" id="484"> </td>
 <td> <input type="radio" name="48" value="5" id="485"> </td><td>Yes</td>
    <td> <input type="radio" name="48" value="0" id="480"> </td><td>Skip</td>
 
    </tr>
    </table>
  
  
   <table style="text-align:center; color:white"><tr>
   <td colspan="9" style="background-color:#D0D002"><b> Slim and Slender:</b></td></tr><tr>
  <td>No</td><td> <input type="radio" name="49" value="1" id="491"> </td>
 <td> <input type="radio" name="49" value="2" id="492"> </td>
 <td> <input type="radio" name="49" value="3" checked id="493"> </td>
    <td> <input type="radio" name="49" value="4" id="494"> </td>
 <td> <input type="radio" name="49" value="5" id="495"> </td><td>Yes</td>
    <td> <input type="radio" name="49" value="0" id="490"> </td><td>Skip</td>
 
    </tr>
    </table>
  
  
  
  <table style="text-align:center; color:white"><tr>
   <td colspan="9" style="background-color:#D0BB02"><b>Physically Fit:</b></td></tr><tr>
  <td>No</td><td> <input type="radio" name="50" value="1" id="501"> </td>
 <td> <input type="radio" name="50" value="2" id="502"> </td>
 <td> <input type="radio" name="50" value="3" checked id="503"> </td>
    <td> <input type="radio" name="50" value="4" id="504"> </td>
 <td> <input type="radio" name="50" value="5" id="505"> </td><td>Yes</td>
    <td> <input type="radio" name="50" value="0" id="500"> </td><td>Skip</td>
 
    </tr>
    </table>
  
  
  
   <table style="text-align:center; color:white"><tr>
   <td colspan="9" style="background-color:#D0A602"><b> Above average height:</b></td></tr><tr>
  <td>No</td><td> <input type="radio" name="51" value="1" id="511"> </td>
 <td> <input type="radio" name="51" value="2" id="512"> </td>
 <td> <input type="radio" name="51" value="3" checked id="513"> </td>
    <td> <input type="radio" name="51" value="4" id="514"> </td>
 <td> <input type="radio" name="51" value="5" id="515"> </td><td>Yes</td>
    <td> <input type="radio" name="51" value="0" id="510"> </td><td>Skip</td>
 
    </tr>
    </table>
  
  
   <table style="text-align:center; color:white"><tr>
   <td colspan="9" style="background-color:#D0A002"><b>Mobile/Movement Performer:</b></td></tr><tr>
  <td>No</td><td> <input type="radio" name="52" value="1" id="521"> </td>
 <td> <input type="radio" name="52" value="2" id="522"> </td>
 <td> <input type="radio" name="52" value="3" checked id="523"> </td>
    <td> <input type="radio" name="52" value="4" id="524"> </td>
 <td> <input type="radio" name="52" value="5" id="525"> </td><td>Yes</td>
    <td> <input type="radio" name="52" value="0" id="520"> </td><td>Skip</td>
 
    </tr>
    </table>
  
  
  
  <table style="text-align:center; color:white"><tr>
   <td colspan="9" style="background-color:#D09902"><b>Transportative/Transporter</b></td></tr><tr>
  <td>No</td><td> <input type="radio" name="53" value="1" id="531"> </td>
 <td> <input type="radio" name="53" value="2" id="532"> </td>
 <td> <input type="radio" name="53" value="3" checked id="533"> </td>
    <td> <input type="radio" name="53" value="4" id="534"> </td>
 <td> <input type="radio" name="53" value="5" id="535"> </td><td>Yes</td>
    <td> <input type="radio" name="53" value="0" id="530"> </td><td>Skip</td>
 
    </tr>
    </table>
  
  
  
 <table style="text-align:center; color:white"><tr>
   <td colspan="9" style="background-color:#D09902"><b>Security/Protector:</b></td></tr><tr>
  <td>No</td><td> <input type="radio" name="54" value="1" id="541"> </td>
 <td> <input type="radio" name="54" value="2" id="542"> </td>
 <td> <input type="radio" name="54" value="3" checked id="543"> </td>
    <td> <input type="radio" name="54" value="4" id="544"> </td>
 <td> <input type="radio" name="54" value="5" id="545"> </td><td>Yes</td>
    <td> <input type="radio" name="54" value="0" id="540"> </td><td>Skip</td>
 
    </tr>
    </table>
  
  
 <table style="text-align:center; color:white"><tr>
   <td colspan="9" style="background-color:#D09902"><b>Elderly:</b></td></tr><tr>
  <td>No</td><td> <input type="radio" name="55" value="1" id="551"> </td>
 <td> <input type="radio" name="55" value="2" id="552"> </td>
 <td> <input type="radio" name="55" value="3" checked id="553"> </td>
    <td> <input type="radio" name="55" value="4" id="554"> </td>
 <td> <input type="radio" name="55" value="5" id="555"> </td><td>Yes</td>
    <td> <input type="radio" name="55" value="0" id="550"> </td><td>Skip</td>
 
    </tr>
    </table>
  
 <table style="text-align:center; color:white"><tr>
   <td colspan="9" style="background-color:#AB6F14"><b>Physically youthful:</b></td></tr><tr>
  <td>No</td><td> <input type="radio" name="56" value="1" id="561"> </td>
 <td> <input type="radio" name="56" value="2" id="562"> </td>
 <td> <input type="radio" name="56" value="3" checked id="563"> </td>
    <td> <input type="radio" name="56" value="4" id="564"> </td>
 <td> <input type="radio" name="56" value="5" id="565"> </td><td>Yes</td>
    <td> <input type="radio" name="56" value="0" id="560"> </td><td>Skip</td>
 
    </tr>
    </table>
    
  
  <table style="text-align:center; color:white"><tr>
   <td colspan="9" style="background-color:#AB6F14"><b> The Big City:</b></td></tr><tr>
  <td>No</td><td> <input type="radio" name="57" value="1" id="571"> </td>
 <td> <input type="radio" name="57" value="2" id="572"> </td>
 <td> <input type="radio" name="57" value="3" checked id="573"> </td>
    <td> <input type="radio" name="57" value="4" id="574"> </td>
 <td> <input type="radio" name="57" value="5" id="575"> </td><td>Yes</td>
    <td> <input type="radio" name="57" value="0" id="570"> </td><td>Skip</td>
 
    </tr>
    </table>
  
 <table style="text-align:center; color:white"><tr>
   <td colspan="9" style="background-color:#AB6F14"><b>Nature:</b></td></tr><tr>
  <td>No</td><td> <input type="radio" name="58" value="1" id="581"> </td>
 <td> <input type="radio" name="58" value="2" id="582"> </td>
 <td> <input type="radio" name="58" value="3" checked id="583"> </td>
    <td> <input type="radio" name="58" value="4" id="584"> </td>
 <td> <input type="radio" name="58" value="5" id="585"> </td><td>Yes</td>
    <td> <input type="radio" name="58" value="0" id="580"> </td><td>Skip</td>
 
    </tr>
    </table>
  
  
 <table style="text-align:center; color:white"><tr>
   <td colspan="9" style="background-color:#AB6F14"><b>Daytime:</b></td></tr><tr>
  <td>No</td><td> <input type="radio" name="59" value="1" id="591"> </td>
 <td> <input type="radio" name="59" value="2" id="592"> </td>
 <td> <input type="radio" name="59" value="3" checked id="593"> </td>
    <td> <input type="radio" name="59" value="4" id="594"> </td>
 <td> <input type="radio" name="59" value="5" id="595"> </td><td>Yes</td>
    <td> <input type="radio" name="59" value="0" id="590"> </td><td>Skip</td>
 
    </tr>
    </table>
  
  
  
 <table style="text-align:center; color:white"><tr>
   <td colspan="9" style="background-color:#AB5B14"><b>Nighttime:</b></td></tr><tr>
  <td>No</td><td> <input type="radio" name="60" value="1" id="601"> </td>
 <td> <input type="radio" name="60" value="2" id="602"> </td>
 <td> <input type="radio" name="60" value="3" checked id="603"> </td>
    <td> <input type="radio" name="60" value="4" id="604"> </td>
 <td> <input type="radio" name="60" value="5" id="605"> </td><td>Yes</td>
    <td> <input type="radio" name="60" value="0" id="600"> </td><td>Skip</td>
 
    </tr>
    </table>
  
  
 <table style="text-align:center; color:white"><tr>
   <td colspan="9" style="background-color:#AB5B14"><b>Space or Astral Exploration</b></td></tr><tr>
  <td>No</td><td> <input type="radio" name="61" value="1" id="611"> </td>
 <td> <input type="radio" name="61" value="2" id="612"> </td>
 <td> <input type="radio" name="61" value="3" checked id="613"> </td>
    <td> <input type="radio" name="61" value="4" id="614"> </td>
 <td> <input type="radio" name="61" value="5" id="615"> </td><td>Yes</td>
    <td> <input type="radio" name="61" value="0" id="610"> </td><td>Skip</td>
 
    </tr>
    </table>
  
  
   <table style="text-align:center; color:white"><tr>
   <td colspan="9" style="background-color:#AB5B14"><b>Prefer Hot Climates:</b></td></tr><tr>
  <td>No</td><td> <input type="radio" name="62" value="1" id="621"> </td>
 <td> <input type="radio" name="62" value="2" id="622"> </td>
 <td> <input type="radio" name="62" value="3" checked id="623"> </td>
    <td> <input type="radio" name="62" value="4" id="624"> </td>
 <td> <input type="radio" name="62" value="5" id="625"> </td><td>Yes</td>
    <td> <input type="radio" name="62" value="0" id="620"> </td><td>Skip</td>
 
    </tr>
    </table>
  
  
  
   <table style="text-align:center; color:white"><tr>
   <td colspan="9" style="background-color:#AB5B14"><b>Prefer Cold Climates</b></td></tr><tr>
  <td>No</td><td> <input type="radio" name="63" value="1" id="631"> </td>
 <td> <input type="radio" name="63" value="2" id="632"> </td>
 <td> <input type="radio" name="63" value="3" checked id="633"> </td>
    <td> <input type="radio" name="63" value="4" id="634"> </td>
 <td> <input type="radio" name="63" value="5" id="635"> </td><td>Yes</td>
    <td> <input type="radio" name="63" value="0" id="630"> </td><td>Skip</td>
 
    </tr>
    </table>
  
  
  
  
  
   <table style="text-align:center; color:white"><tr>
   <td colspan="9" style="background-color:#AB4114"><b>Prefer to live in Oceanic Environments:</b></td></tr><tr>
  <td>No</td><td> <input type="radio" name="64" value="1" id="641"> </td>
 <td> <input type="radio" name="64" value="2" id="642"> </td>
 <td> <input type="radio" name="64" value="3" checked id="643"> </td>
    <td> <input type="radio" name="64" value="4" id="644"> </td>
 <td> <input type="radio" name="64" value="5" id="645"> </td><td>Yes</td>
    <td> <input type="radio" name="64" value="0" id="640"> </td><td>Skip</td>
 
    </tr>
    </table>
  
  
  <table style="text-align:center; color:white"><tr>
   <td colspan="9" style="background-color:#AB4114"><b>Prefer to live in Forest Environments:</b></td></tr><tr>
  <td>No</td><td> <input type="radio" name="65" value="1" id="651"> </td>
 <td> <input type="radio" name="65" value="2" id="652"> </td>
 <td> <input type="radio" name="65" value="3" checked id="653"> </td>
    <td> <input type="radio" name="65" value="4" id="654"> </td>
 <td> <input type="radio" name="65" value="5" id="655"> </td><td>Yes</td>
    <td> <input type="radio" name="65" value="0" id="650"> </td><td>Skip</td>
 
    </tr>
    </table>
  
  <table style="text-align:center; color:white"><tr>
   <td colspan="9" style="background-color:#AB4114"><b>Prefer to live in Desert Environments:</b></td></tr><tr>
  <td>No</td><td> <input type="radio" name="66" value="1" id="661"> </td>
 <td> <input type="radio" name="66" value="2" id="662"> </td>
 <td> <input type="radio" name="66" value="3" checked id="663"> </td>
    <td> <input type="radio" name="66" value="4" id="664"> </td>
 <td> <input type="radio" name="66" value="5" id="665"> </td><td>Yes</td>
    <td> <input type="radio" name="66" value="0" id="660"> </td><td>Skip</td>
 
    </tr>
    </table>
    
 <table style="text-align:center; color:white"><tr>
   <td colspan="9" style="background-color:#AB4114"><b>Prefer to live in Tundra Environments:</b></td></tr><tr>
  <td>No</td><td> <input type="radio" name="67" value="1" id="671"> </td>
 <td> <input type="radio" name="67" value="2" id="672"> </td>
 <td> <input type="radio" name="67" value="3" checked id="673"> </td>
    <td> <input type="radio" name="67" value="4" id="674"> </td>
 <td> <input type="radio" name="67" value="5" id="675"> </td><td>Yes</td>
    <td> <input type="radio" name="67" value="0" id="670"> </td><td>Skip</td>
 
    </tr>
    </table>
  
 <table style="text-align:center; color:white"><tr>
   <td colspan="9" style="background-color:#AB2814"><b>European Ancestors:</b></td></tr><tr>
  <td>No</td><td> <input type="radio" name="68" value="1" id="681"> </td>
 <td> <input type="radio" name="68" value="2" id="682"> </td>
 <td> <input type="radio" name="68" value="3" checked id="683"> </td>
    <td> <input type="radio" name="68" value="4" id="684"> </td>
 <td> <input type="radio" name="68" value="5" id="685"> </td><td>Yes</td>
    <td> <input type="radio" name="68" value="0" id="680"> </td><td>Skip</td>
 
    </tr>
    </table>
  
  
  <table style="text-align:center; color:white"><tr>
   <td colspan="9" style="background-color:#AB2814"><b>Central and South Asia Ancestors:</b></td></tr><tr>
  <td>No</td><td> <input type="radio" name="69" value="1" id="691"> </td>
 <td> <input type="radio" name="69" value="2" id="692"> </td>
 <td> <input type="radio" name="69" value="3" checked id="693"> </td>
    <td> <input type="radio" name="69" value="4" id="694"> </td>
 <td> <input type="radio" name="69" value="5" id="695"> </td><td>Yes</td>
    <td> <input type="radio" name="69" value="0" id="690"> </td><td>Skip</td>
 
    </tr>
    </table>
  
  
  
 <table style="text-align:center; color:white"><tr>
   <td colspan="9" style="background-color:#AB2814"><b>East Asian and Native American Ancestors:</b></td></tr><tr>
  <td>No</td><td> <input type="radio" name="70" value="1" id="701"> </td>
 <td> <input type="radio" name="70" value="2" id="702"> </td>
 <td> <input type="radio" name="70" value="3" checked id="703"> </td>
    <td> <input type="radio" name="70" value="4" id="704"> </td>
 <td> <input type="radio" name="70" value="5" id="705"> </td><td>Yes</td>
    <td> <input type="radio" name="70" value="0" id="700"> </td><td>Skip</td>
 
    </tr>
    </table>
  
  
 <table style="text-align:center; color:white"><tr>
   <td colspan="9" style="background-color:#AB2814"><b>Sub-Saharan Africa Ancestors:</b></td></tr><tr>
  <td>No</td><td> <input type="radio" name="71" value="1" id="711"> </td>
 <td> <input type="radio" name="71" value="2" id="712"> </td>
 <td> <input type="radio" name="71" value="3" checked id="713"> </td>
    <td> <input type="radio" name="71" value="4" id="714"> </td>
 <td> <input type="radio" name="71" value="5" id="715"> </td><td>Yes</td>
    <td> <input type="radio" name="71" value="0" id="710"> </td><td>Skip</td>
 
    </tr>
    </table>
 
  
 <table style="text-align:center; color:white"><tr>
   <td colspan="9" style="background-color:#AB2814"><b>Western Asia and North Africa Ancestors:</b></td></tr><tr>
  <td>No</td><td> <input type="radio" name="72" value="1" id="721"> </td>
 <td> <input type="radio" name="72" value="2" id="722"> </td>
 <td> <input type="radio" name="72" value="3" checked id="723"> </td>
    <td> <input type="radio" name="72" value="4" id="724"> </td>
 <td> <input type="radio" name="72" value="5" id="725"> </td><td>Yes</td>
    <td> <input type="radio" name="72" value="0" id="720"> </td><td>Skip</td>
 
    </tr>
    </table>
  
  
  
   <table style="text-align:center; color:white"><tr>
   <td colspan="9" style="background-color:#AB2814"><b>Melanesian Ancestors:</b></td></tr><tr>
  <td>No</td><td> <input type="radio" name="73" value="1" id="731"> </td>
 <td> <input type="radio" name="73" value="2" id="732"> </td>
 <td> <input type="radio" name="73" value="3" checked id="733"> </td>
    <td> <input type="radio" name="73" value="4" id="734"> </td>
 <td> <input type="radio" name="73" value="5" id="735"> </td><td>Yes</td>
    <td> <input type="radio" name="73" value="0" id="730"> </td><td>Skip</td>
 
    </tr>
    </table>
  
  
  
  
  
 <table style="text-align:center; color:white"><tr>
   <td colspan="9" style="background-color:#AB2814"><b>A Traveler:</b></td></tr><tr>
  <td>No</td><td> <input type="radio" name="74" value="1" id="741"> </td>
 <td> <input type="radio" name="74" value="2" id="742"> </td>
 <td> <input type="radio" name="74" value="3" checked id="743"> </td>
    <td> <input type="radio" name="74" value="4" id="744"> </td>
 <td> <input type="radio" name="74" value="5" id="745"> </td><td>Yes</td>
    <td> <input type="radio" name="74" value="0" id="740"> </td><td>Skip</td>
 
    </tr>
    </table>
  
  
 <table style="text-align:center; color:white"><tr>
   <td colspan="9" style="background-color:#890D0D"><b>Financially rich and wealthy:</b></td></tr><tr>
  <td>No</td><td> <input type="radio" name="75" value="1" id="751"> </td>
 <td> <input type="radio" name="75" value="2" id="752"> </td>
 <td> <input type="radio" name="75" value="3" checked id="753"> </td>
    <td> <input type="radio" name="75" value="4" id="754"> </td>
 <td> <input type="radio" name="75" value="5" id="755"> </td><td>Yes</td>
    <td> <input type="radio" name="75" value="0" id="750"> </td><td>Skip</td>
 
    </tr>
    </table>
  </font>
  
  <br><br>
  
<input type="button" onclick="createseq()" value="Create TM Sequence" class="btn btn-primary">
 <br>
  Your TM Sequence Will Appear Below:<br>
  

     <input type="text" id="seqcreate">
<br>

<button onclick="copyseq()" class="btn btn-primary">Copy TM Sequence</button>
    <br><br>
 




 <div id="sequencereaderd"></div>

</div>
   



  



 <div class="container-fluid bg-dark text-light" id="sequencediverge" style=" width:100%;"><br>
<center>
  <center><h2 id="diverge-sequence">Sequence Diverge</h2></center>
<center>
    

  <label>Want to differentiate a sequence to get its opposite? Select the degree of the divergence in the paramaters below and then click Diverge Sequence.<br></label>

    <br><br>
  
 <input type="radio" id="diver0" name="diverge" checked="true">Differentiate by 0% (Identical)<br>
<input type="radio" id="diver25" name="diverge"> Differentiate by 25%<br>
<input type="radio" id="diver50" name="diverge"> Differentiate by 50%<br>
<input type="radio" id="diver75" name="diverge"> Differentiate by 75%<br>
<input type="radio" id="diver100" name="diverge"> Differentiate by 100% (Opposite)<br><br>

  Enter your Sequence here:<br>
<input type="text" id="tmseqsubd"><br>
  
<input type="button" onclick="diverge()" value="Diverge Sequence" class="btn btn-primary">
   
  
  <br>
  
  
  
  Your new diverged Sequence:<br>
  

     <input type="text" id="seqcreated">
<br>

<button onclick="copyseqd()" class="btn btn-primary">Copy Diverged Sequence</button>
    
  <br><br>
    
    
    
    
    
    
  

</div>

  

<div class="container-fluid" id="mergeSequence" style="color:white; background-color:#282828; width:100%;">
<br>
  <center><h2><b id="merge-sequences">Sequence Merge:</b></h2></center><center>
         
 
  <label>
Want to create a group sequence to see what it would be like if two or more people were merged together? Paste up to 9 Sequences in the spaces below. Click Merge Sequences to neutralize, combine, and merge them into one.</label>
    <br><br>
   
  
<input type="text" id="tmseqsub1" ><br>
      
<input type="text" id="tmseqsub2"><br>
       
<input type="text" id="tmseqsub3"><br>
    
    
<input type="text" id="tmseqsub4"><br>
      
<input type="text" id="tmseqsub5"><br>
       
<input type="text" id="tmseqsub6"><br>
    
    
<input type="text" id="tmseqsub7"><br>
      
<input type="text" id="tmseqsub8"><br>
       
<input type="text" id="tmseqsub9"><br>
         <br>
    
  
  
  
  
<input type="button" onclick="merge()" value="Merge Sequences" class="btn btn-primary">
   
  <br>
  
  <br>
  
  
  
  Your new merged Sequence:<br>
  

     <input type="text" id="seqcreatem">

<br>
<button onclick="copyseqm()" class="btn btn-primary">Copy Merged Sequence</button>
    
    <br><br>
    

</div>

@endsection

@section('jquery')




<script type="text/JavaScript">

  function createseq()
  {
    
    var newsequence = []
    var dn = ["1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31","32","33","34","35","36","37","38","39","40", "41", "42","43","44","45","46", "47", "48", "49", "50", "51", "52", "53", "54", "55", "56", "57", "58", "59", "60", "61", "62", "63", "64", "65", "66", "67", "68", "69", "70", "71", "72", "73", "74", "75" ]
    var sn = ["1","2","3","4","5","0"]
    
    
    if(document.getElementById("iseq").checked == true)
      {
        newsequence.push("tmi_s755b.")
        }
    
    else if (document.getElementById("cseq").checked == true)
      {
        newsequence.push("tmc_s755b.")
        }
    
    else if (document.getElementById("gseq").checked == true)
      {
        newsequence.push("tmg_s755b.")
        }
    
    
    
    for(d=0;d<75;d++)
      {
    
    for(s=0;s<6;s++)
      {
    
       if(document.getElementById(dn[d]+sn[s]).checked == true)
      {
       // alert(dn[d]+sn[s])
        newsequence.push(sn[s])
        }
        
        
    }
    
    }
    
   newsequence = newsequence.join("") 
    
    
    
   alert("Your TM Sequence is: "+newsequence) 
document.getElementById("seqcreate").value = newsequence
  
  }
  
  function copyseq() {
  /* Get the text field */
  var copyText = document.getElementById("seqcreate");

  /* Select the text field */
  copyText.select(); 
  copyText.setSelectionRange(0, 99999); /*For mobile devices*/

  /* Copy the text inside the text field */
  document.execCommand("copy");

  /* Alert the copied text */
  alert("Copied sequence: " + copyText.value);
}
  
  
  
  </script>
     







<script type="text/JavaScript">

/*
  valid tm sequence example (copy and paste):
  tmc_s755b.543215432154321543215432154321543215432154321543215432154321543215432155555

*/
  
//What the sequence must be compared to for verification and lists that will be created later
var scale = ["0","1","2","3","4","5"]
//The number of scales will likely be 75, but if it change to 81, only the following two variables need to be changed:
var scales = 75 /*if scales are 81, change to 81*/
var tmseqlength = 85 /*if scales are 81, changed to 81+10 = 91 ("tmi_s815b." is 10 characters)*/
personlist = ["universal",
  "religous",
  "intuitive",
  "spiritual",
  "contemplative",
  "logic",
  "avid reader",
  "sensing, sensual",
  "historian",
  "science",
  "mechanical",
  "technology",
  "traditional",
  "collectivist",
  "individualist",
  "inventor or creator",
  "business (economic)",
  "nonprofit",
  "director",
  "legal aid / law",
  "healer",
  "teacher",
  "gamer",
  "love music",
  "love movies",
  "competitive",
  "social",
  "social performer",
  "common, normal",
  "Animal socializing",
  "Higher intelligences",
  "chef",
  "vegan",
  "organic food",
  "processed food",
  "carnivorous",
  "happy",
  "caring",
  "a humorous/joking",
  "serious",
  "assertive",
  "looking for a serious relationship",
  "promiscuous",
  "heterosexual",
  "homosexual",
  "have very outward reproductive organs",
  "have very inward reproductive organs",
  "above average weight",
  "slim and slender",
  "physically fit",
  "above average height",
  "mobile/movement performer",
  "transportative/transporter",
  "security/protector",
  "elderly",
  "physically youthful",
  "the big city",
  "nature",
  "daytime",
  "nighttime",
  "space or astral exploration",
  "prefer hot climates",
  "prefer cold climates",
  "prefer to live in oceanic environments",
  "prefer to live in forest environments",
  "prefer to live in desert environments",
  "prefer to live in tundra environments",
  "European ancestosrs",
  "Central and South Asia ancestors",
  "East Asian and Native American ancestors",
  "Sub-Saharan Africa ancestors",
  "Western Asia and North Africa ancestors",
  "Melanesian ancestors",
  "a traveler",
  "financially rich and wealthy"]
    
    
                  
//str = JSON.stringify(persons);
//str = JSON.stringify(persons, null, 4); // (Optional) beautiful indented output.
//console.log(str); // Logs output to dev tools console.
//alert(str); 



/*Verify Sequence Function to apply before
each section where it involves submitting
a tmsequence
  */
 
 
 
 
 
 
 
 
 
function verifysequencec(one,two)
{
  
  var scalecount = 0
   
    // Get the value of the input field
  
    two = document.getElementById(one).value;

  
//First, remove any white space from sequence
two = two.replace(/\s/g,"");
  
//alert(two)
  
/*This will check each digit after the dot
and check if the digit is in the scale list
if it is in the scale list scalecount gets
a point. scalecount will have to be equal 
to scales(5)
*/

for(i=0;i<scales;i++){
     if (two[10+i] in scale){
      scalecount++
       }
     }
  
/*Verify the following:
beginning digits are:tmi_s755b.
scalecount = ascales
submitted sequence length = tmseqlength(15)
if true make the variable "verification" = "correct"
do the same for tmc_s755b. and tmg_s755b.
    */
           
if (two[0]=="t" && 
    two[1]=="m" &&
    two[2]=="i" &&
    two[3]=="_" &&
    two[4]=="s" &&
    two[5]=="7" && 
    two[6]=="5" &&
    two[7]=="5" &&
    two[8]=="b" &&
    two[9] == "." &&
    two.length==tmseqlength &&
    scalecount == scales
   ){
   var verification = "correct";
  }
  else if (
   two[0]=="t" && 
    two[1]=="m" &&
    two[2]=="c" &&
    two[3]=="_" &&
    two[4]=="s" &&
    two[5]=="7" && 
    two[6]=="5" &&
    two[7]=="5" &&
    two[8]=="b" &&
    two[9] == "." &&
    two.length==tmseqlength &&
    scalecount == scales
  
  ){
   var verification = "correct";
  } 
 
  else if (
   two[0]=="t" && 
    two[1]=="m" &&
    two[2]=="g" &&
    two[3]=="_" &&
    two[4]=="s" &&
    two[5]=="7" && 
    two[6]=="5" &&
    two[7]=="5" &&
    two[8]=="b" &&
   two[9] == "." && 
    two.length==tmseqlength &&
    scalecount == scales
  ) {
   var verification = "correct";
  } 
  
  else if (
    two.length==0
  ) {
   var verification = "correct";
  } 
  
  
/*If all those conditions are not satisfied
  then verification variable will be "incorrect"
  */
  
  else {
    var verification = "incorrect";
    }
  

  /*When this function is called before each submission section
  if verification is correct, then the function returns a 1
  if verification is incorrect, then the function returns a 0
  */
  var returned = [two.length,two]
  
  if (verification == "correct")
    
    {
      return returned
      }
  else 
    {
      return "no"
      }
  
  }
  
    
  
  function compare() {
    
    var newseq = [0,0,0,0,0,0,0,0,0,0,
                  0,0,0,0,0,0,0,0,0,0,
                  0,0,0,0,0,0,0,0,0,0,
                  0,0,0,0,0,0,0,0,0,0,
                  0,0,0,0,0,0,0,0,0,0,
                  0,0,0,0,0,0,0,0,0,0,
                  0,0,0,0,0,0,0,0,0,0,
                  0,0,0,0,0
                 ]
    var scalesequence1 = []
var scalesequence2 = []

    var tmseq1
    var tmseq2
    
    var tester1 = verifysequencec("tmseqsubm1c", tmseq1)
    var tester2 = verifysequencec("tmseqsubm2c", tmseq2)
    
 
 // alert(tester1[0]+" "+tester2[0] )
 
    
    if(tester1[0]+tester2[0]
     > 169 &&
     tester1 != "no" &&
     tester2 != "no" 
     
    ) 
    {
  //  alert("Verified")
      
      
      
      
      /*We only need the last 75 digits.
 This will loop through them and assign 
 each digit to the empty list variable
 "scalesequence" (above) creating the list
    */
    
    for(i=0;i<scales;i++){
     scalesequence1.push(tester1[1][10+i])
     scalesequence2.push(tester2[1][10+i])
      }
      
   
     
    
    //This will turn each element in each 
    //list into a number value instead
    //of a string 
    
      
      
    for(i=0;i<scales;i++){
    scalesequence1[i]= parseInt(scalesequence1[i])
    scalesequence2[i]= parseInt(scalesequence2[i])
     }
      
      
      
      
      /*now we have to check which sequences have numbers
      and which are "NaN" or empty  ("NaN" is what it creates 
      if there is no parseInt */
      
      
        var scalesequenceall = [0,scalesequence1,
           scalesequence2  ]                             
      
 /*
 for(i=1;i<10;i++)
        {
      alert(scalesequenceall[i][0])
      }
      */
      
 var scalesequencewithnumbers = []
 
      //creating a list for the sequence with numbers 
 
      for(i=1;i<3;i++)
        {
          
      if (isNaN(scalesequenceall[i][0])==false)
          {
      scalesequencewithnumbers.push(i)
        }
     
      }
      
      
      
      //Now let's begin adding sequences
      
      for(i=0;i<scales;i++)
        {
          
       
      for(j=0;j<scalesequencewithnumbers.length;j++)
      {
        
     if (scalesequenceall[scalesequencewithnumbers[j]][i]==0)
        
        {
          //+50 will make it so if a digit has a zero it becomes +50
          //and then when subtracting the digits of the sequences it will 
          //be a value less then -6
          newseq[i]="a" 
          }
        
        
        
        
        
          
      newseq[i] -= scalesequenceall[scalesequencewithnumbers[j]][i]
      
        if(scalesequenceall[scalesequencewithnumbers[j]][i]!="a")
        {
          
          
          
      newseq[i] = Math.abs(newseq[i])
          }
          }
      }
      
   //   alert(newseq)
      
      
      //if the value is less than 0, it is converted to a zero
      for (i=0;i<newseq.length;i++)
        {
          if(newseq[i] < -6)
           {
            newseq[i]=-33
           }
          
        }
      
      
      
      
      //converting numbers to percentages
      
      for (i=0;i<newseq.length;i++)
        {
          if(newseq[i] == 0)
           {
            newseq[i] = 0
           }
          
          if(newseq[i] == 1)
           {
            newseq[i] = 25
           }
          
          if(newseq[i] == 2)
           {
            newseq[i] = 50
           }
          
          if(newseq[i] == 3)
           {
            newseq[i] = 75
           }
          
          if(newseq[i] == 4)
           {
            newseq[i] = 100
          }
          
        }
      
     // alert(newseq)
      
      
      
      //saving the list in persons before removing
      //those with no answer to use in the alert at the end
      //for each category
      //Beginning of formatting list display for PERSONS var
      
      var persons = []
      var sav = []
        
      
      for (i=0;i<newseq.length;i++)
      {
      persons[i] = personlist[i]+": "+newseq[i]+"% different "
     
        }
      for (i=0;i<newseq.length;i++)
        {
     if (isNaN(newseq[i])==true)
          {
        sav.push(" ")
            }
          else 
            {
          sav.push(100-newseq[i])
          
          }
      }
    
    
    //  alert("sav: "+sav)
      
      for (i=0;i<newseq.length;i++)
      {
        if (isNaN(newseq[i])==true)
          {
            persons[i]=personlist[i]+": Unknown \n\n"
            }
        else 
          {
        
      persons[i] = persons[i]+sav[i]+"% similar \n\n"
     
            }
        }
      
      
     //End of formatting list display  
      
      
      //Remove the NaN from newseq
      
      
      for (i=0;i<newseq.length;i++)
        {
          if(isNaN(newseq[i]) == true)
           {
            newseq.splice(i,1)
             //so the next element is not skipped
             i--
           }
          
        }
      
  //    alert(newseq)
   //   alert(newseq.length)
      
      
    //Add sum of all numbers
      var sum = 0
      for (i=0;i<newseq.length;i++)
        {
           sum+=newseq[i]
           }
          
        //dividing by length to get average
      
      
      var average = sum/newseq.length
      
      
     // alert(newseq)
      //  alert(sum)
      //    alert(average)
          
      
      
      
      
      
      
      
      
      //the similarity is 100 minus the difference
      
     var saverage = 100-average
        
  var personsbr = []
     for(i=0;i<persons.length;i++)
       (
  personsbr[i]=persons[i]+"<br><br>"
         )
         personsbr =  personsbr.join(" ")
   
   persons =  persons.join(" ")
 
      
      alert("Sequences are approximately "+average+"% Different and "+saverage+"% Similar. Individual differences are as follows:\n\n"+persons)
            
            
      
       
      
  document.getElementById("sequencecompared").innerHTML = "<b>Sequences are approximately<i> "+average+"% Different and "+saverage+"% Similar</i>. Individual differences are as follows:</b><br><br>"+personsbr;
      
      
      
      
      
      
      
      
    }
    else 

    {
document.getElementById("sequencecompared").innerHTML = ""
    alert("At least one of the sequences are invalid")
     } 
      
      
    }
  
  
  
  
  
  
 </script>





  
   
<script type="text/JavaScript">

/*
  valid tm sequence example (copy and paste):
  tmc_s755b.543215432154321543215432154321543215432154321543215432154321543215432155555
*/
  
//What the sequence must be compared to for verification and lists that will be created later
var scale = ["0","1","2","3","4","5"]
//The number of scales will likely be 75, but if it change to 81, only the following two variables need to be changed:
var scales = 75 /*if scales are 81, change to 81*/
var tmseqlength = 85 /*if scales are 81, changed to 81+10 = 91 ("tmi_s815b." is 10 characters)*/



//The a variable will be incremented to
//go through the lists and oscillate between
//between the numbers when creating diverging sequence
a = 0
var osc1and5 = [1,5,1,5,1,5,1,5,1,5,1,5,1,5,
                1,5,1,5,1,5,1,5,1,5,1,5,1,5,
                1,5,1,5,1,5,1,5,1,5,1,5,1,5,
                1,5,1,5,1,5,1,5,1,5,1,5,1,5,
                1,5,1,5,1,5,1,5,1,5,1,5,1,5,
                1,5,1,5,1,5,1,5,1,5,1,5,1,5]
  
var osc2and4 = [2,4,2,4,2,4,2,4,2,4,2,4,2,4,
                2,4,2,4,2,4,2,4,2,4,2,4,2,4,
                2,4,2,4,2,4,2,4,2,4,2,4,2,4,
                2,4,2,4,2,4,2,4,2,4,2,4,2,4,
                2,4,2,4,2,4,2,4,2,4,2,4,2,4,
                2,4,2,4,2,4,2,4,2,4,2,4,2,4]

var osc1and3 = [1,3,1,3,1,3,1,3,1,3,1,3,1,3,
                 1,3,1,3,1,3,1,3,1,3,1,3,1,3,
                 1,3,1,3,1,3,1,3,1,3,1,3,1,3,
                 1,3,1,3,1,3,1,3,1,3,1,3,1,3,
                 1,3,1,3,1,3,1,3,1,3,1,3,1,3, 
                 1,3,1,3,1,3,1,3,1,3,1,3,1,3]

 var osc3and5 = [3,5,3,5,3,5,3,5,3,5,3,5,3,5,
 3,5,3,5,3,5,3,5,3,5,3,5,3,5,
 3,5,3,5,3,5,3,5,3,5,3,5,3,5,
 3,5,3,5,3,5,3,5,3,5,3,5,3,5,
 3,5,3,5,3,5,3,5,3,5,3,5,3,5,
 3,5,3,5,3,5,3,5,3,5,3,5,3,5]
 
 
/*Verify Sequence Function to apply before
each section where it involves submitting
a tmsequence
  */
function verifysequenced()
{
  
  var scalecount = 0
  var tmseqd 
    // Get the value of the input field
  
    tmseqd = document.getElementById("tmseqsubd").value;

  
//First, remove any white space from sequence
tmseqd = tmseqd.replace(/\s/g,"");
//alert(tmseqd)
/*This will check each digit after the dot
and check if the digit is in the scale list
if it is in the scale list scalecount gets
a point. scalecount will have to be equal 
to scales(5)
*/

for(i=0;i<scales;i++){
     if (tmseqd[10+i] in scale){
      scalecount++
       }
     }
  
/*Verify the following:
beginning digits are:tmi_s755b.
scalecount = scales
submitted sequence length = tmseqlength(15)
if true make the variable "verification" = "correct"
do the same for tmc_s755b. and tmg_s755b.
    */
           
if (tmseqd[0]=="t" && 
    tmseqd[1]=="m" &&
    tmseqd[2]=="i" &&
    tmseqd[3]=="_" &&
    tmseqd[4]=="s" &&
    tmseqd[5]=="7" && 
    tmseqd[6]=="5" &&
    tmseqd[7]=="5" &&
    tmseqd[8]=="b" &&
    tmseqd[9] == "." &&
    tmseqd.length==tmseqlength &&
    scalecount == scales
   ){
   var verification = "correct";
  }
  else if (
   tmseqd[0]=="t" && 
    tmseqd[1]=="m" &&
    tmseqd[2]=="c" &&
    tmseqd[3]=="_" &&
    tmseqd[4]=="s" &&
    tmseqd[5]=="7" && 
    tmseqd[6]=="5" &&
    tmseqd[7]=="5" &&
    tmseqd[8]=="b" &&
    tmseqd[9] == "." &&
    tmseqd.length==tmseqlength &&
    scalecount == scales
  
  ){
   var verification = "correct";
  } 
 
  else if (
   tmseqd[0]=="t" && 
    tmseqd[1]=="m" &&
    tmseqd[2]=="g" &&
    tmseqd[3]=="_" &&
    tmseqd[4]=="s" &&
    tmseqd[5]=="7" && 
    tmseqd[6]=="5" &&
    tmseqd[7]=="5" &&
    tmseqd[8]=="b" &&
   tmseqd[9] == "." && 
    tmseqd.length==tmseqlength &&
    scalecount == scales
  ) {
   var verification = "correct";
  } 
  
/*If all those conditions are not satisfied
  then verification variable will be "incorrect"
  */
  
  else {
    var verification = "incorrect";
    }
  

  /*When this function is called before each submission section
  if verification is correct, then the function returns a 1
  if verification is incorrect, then the function returns a 0
  */
  if (verification == "correct")
    {
      return 1
      }
  else 
    {
      return 0
      }
  
  }
  
  
  //END OF verifysequence functuon
  
  
  
  
  
  
//Function to Diverge Sequences
  
function diverge() {
  
  var scalesequence = []
var divergesequence0 = [] 
var divergesequence25 = []
var divergesequence50 = []
var divergesequence75 = []
var divergesequence100 = []
  
  var tmseqd 
    // Get the value of the input field
    tmseqd = document.getElementById("tmseqsubd").value;
  
 /*the following will be either a 1 or 0 from the
  return value of the verifysequence function
  if tester is 1 then the sequence is valid
  if tester is 0 then the sequence is invalid
  */
  var tester = verifysequenced()
  //alert("tester = "+tester+";  1 = verified 0 = unverified")
  //If tester is 1, then we can proceed with the diverge function
  //If tester is 0, then the code is skipped to the "else" statement afterwards
  if(tester==1) {
    
 /*We only need the last 75 digits.
 This will loop through them and assign 
 each digit to the empty list variable
 "scalesequence" (above) creating the list
    */
    
    for(i=0;i<scales;i++){
     scalesequence.push(tmseqd[10+i])
     }
    
    
    //This will turn each element in the 
    //list into a number value instead
    //of a string 
    
    for(i=0;i<scalesequence.length;i++){
    scalesequence[i]= parseInt(scalesequence[i])
     }
    
    
   /*Now that we have the digit list and
    they are numbers, we can begin the 
    diverge functions:0% 25% 50% 75% and 100%
    for each one, a list for the new sequence is 
    created in the above empty lists:
    divergesequence100, divergencesequence75, and 50, 25, and 0.
 */
    
    /*First, were going to add the first 10 characters of
    to each newly to be created divergence list*/
   
    for(i=0;i<10;i++) {
      divergesequence100.push(tmseqd[i])
      divergesequence75.push(tmseqd[i])
      divergesequence50.push(tmseqd[i])
      divergesequence25.push(tmseqd[i])
      divergesequence0.push(tmseqd[i])                  
     }
    
   //Now we will begin creating the diverge functions
                             
    
    function diverge100(){
      
    a = 0
    for(i=0;i<scalesequence.length;i++){
      if(scalesequence[i]==0){
        divergesequence100.push(0)
        }
      else if (scalesequence[i]==1){
        divergesequence100.push(5)
        }
      else if (scalesequence[i]==2){
        divergesequence100.push(5)
        }
      else if (scalesequence[i]==3){
        divergesequence100.push(osc1and5[a++])
        }
      else if (scalesequence[i]==4){
        divergesequence100.push(1)
        }
        else if (scalesequence[i]==5){
        divergesequence100.push(1)
        }
     }
      
      divergesequence100 = divergesequence100.join("")
      
      
     }
    
    diverge100()
    
    function diverge75(){
    a = 0
    for(i=0;i<scalesequence.length;i++){
      if(scalesequence[i]==0){
        divergesequence75.push(0)
        }
      else if (scalesequence[i]==1){
        divergesequence75.push(4)
        }
      else if (scalesequence[i]==2){
        divergesequence75.push(5)
        }
      else if (scalesequence[i]==3){
        divergesequence75.push(osc1and5[a++])
        }
      else if (scalesequence[i]==4){
        divergesequence75.push(1)
        }
        else if (scalesequence[i]==5){
        divergesequence75.push(2)
        }
     }
      
      divergesequence75 = divergesequence75.join("")
      
      
     }
    diverge75()
    
    function diverge50(){
      
      a = 0
    for(i=0;i<scalesequence.length;i++){
      if(scalesequence[i]==0){
        divergesequence50.push(0)
        }
      else if (scalesequence[i]==1){
        divergesequence50.push(3)
        }
      else if (scalesequence[i]==2){
        divergesequence50.push(4)
        }
      else if (scalesequence[i]==3){
        divergesequence50.push(osc1and5[a++])
        }
      else if (scalesequence[i]==4){
        divergesequence50.push(2)
        }
        else if (scalesequence[i]==5){
        divergesequence50.push(3)
        }
     }
      
      divergesequence50 = divergesequence50.join("")
      
     }
    diverge50()
    
    function diverge25(){
      
    a = 0
    for(i=0;i<scalesequence.length;i++){
      if(scalesequence[i]==0){
        divergesequence25.push(0)
        }
      else if (scalesequence[i]==1){
        divergesequence25.push(2)
        }
      else if (scalesequence[i]==2){
        divergesequence25.push(osc1and3[a++])
        }
      else if (scalesequence[i]==3){
        divergesequence25.push(osc2and4[a++])
        }
      else if (scalesequence[i]==4){
        divergesequence25.push(osc3and5[a++])
        }
        else if (scalesequence[i]==5){
        divergesequence25.push(4)
        }
     }
      
      
      divergesequence25 = divergesequence25.join("")
      
      
     }
    diverge25()
    
    
    function diverge0(){
      
      a = 0
    for(i=0;i<scalesequence.length;i++){
      if(scalesequence[i]==0){
        divergesequence0.push(0)
        }
      else if (scalesequence[i]==1){
        divergesequence0.push(1)
        }
      else if (scalesequence[i]==2){
        divergesequence0.push(2)
        }
      else if (scalesequence[i]==3){
        divergesequence0.push(3)
        }
      else if (scalesequence[i]==4){
        divergesequence0.push(4)
        }
        else if (scalesequence[i]==5){
        divergesequence0.push(5)
        }
     }
      
      divergesequence0 = divergesequence0.join("")
      
      }
    diverge0()
    

    
   
    /*Finally, if either of the radios are checked, it shows
    an alert for the corresponding divergesequence list */
  
    if
    (document.getElementById("diver0").checked == true)
    { 
      alert("Your sequence diverged 0%: "+divergesequence0)
      document.getElementById("seqcreated").value = divergesequence0
  
    }
    if 
    (document.getElementById("diver25").checked == true)
    { 
      alert("Your sequence diverged 25%: "+divergesequence25) 
      document.getElementById("seqcreated").value = divergesequence25
  
    }
    if 
    (document.getElementById("diver50").checked == true)
    { 
      alert("Your sequence diverged 50%: "+divergesequence50) 
      document.getElementById("seqcreated").value = divergesequence50
  
    }
    if 
    (document.getElementById("diver75").checked == true)
    { 
      alert("Your sequence diverged 75%: "+divergesequence75) 
      document.getElementById("seqcreated").value = divergesequence75
  
    }
    if 
    (document.getElementById("diver100").checked == true)
    { 
      alert("Your sequence diverged 100% (towards opposite): "+divergesequence100) 
      document.getElementById("seqcreated").value = divergesequence100
  
    }
 
    

    }
  
  //If the "tester" (verification) in beginning was 0 instead of 1:
  
    else {
    
    alert ("Invalid Sequence")
    }
 
   
  }
  
  
  
 //  END OF DIVERGE FUNCTION

  
  function copyseqd() {
  /* Get the text field */
  var copyTextd = document.getElementById("seqcreated");

  /* Select the text field */
  copyTextd.select(); 
  copyTextd.setSelectionRange(0, 99999); /*For mobile devices*/

  /* Copy the text inside the text field */
  document.execCommand("copy");

  /* Alert the copied text */
  alert("Copied sequence: " + copyTextd.value);
}
  
  
  
  
  
  
</script>





<script type="text/JavaScript">

/*
  valid tm sequence example (copy and paste):
  tmc_s755b.543215432154321543215432154321543215432154321543215432154321543215432155555

*/
  
//What the sequence must be compared to for verification and lists that will be created later
var scale = ["0","1","2","3","4","5"]
//The number of scales will likely be 75, but if it change to 81, only the following two variables need to be changed:
var scales = 75 /*if scales are 81, change to 81*/
var tmseqlength = 85 /*if scales are 81, changed to 81+10 = 91 ("tmi_s815b." is 10 characters)*/



//The a variable will be incremented to
//go through the lists and oscillate between
//between the numbers when creating diverging sequence
a = 0
var osc1and2 = [1,2,1,2,1,2,1,2,1,2,1,2,1,2,
                1,2,1,2,1,2,1,2,1,2,1,2,1,2,
                1,2,1,2,1,2,1,2,1,2,1,2,1,2,
                1,2,1,2,1,2,1,2,1,2,1,2,1,2,
                1,2,1,2,1,2,1,2,1,2,1,2,1,2,
                1,2,1,2,1,2,1,2,1,2,1,2,1,2]
  
var osc2and3 = [2,3,2,3,2,3,2,3,2,3,2,3,2,3,
                2,3,2,3,2,3,2,3,2,3,2,3,2,3,
                2,3,2,3,2,3,2,3,2,3,2,3,2,3,
                2,3,2,3,2,3,2,3,2,3,2,3,2,3,
                2,3,2,3,2,3,2,3,2,3,2,3,2,3,
                2,3,2,3,2,3,2,3,2,3,2,3,2,3]

var osc3and4 = [3,4,3,4,3,4,3,4,3,4,3,4,3,4,
                 3,4,3,4,3,4,3,4,3,4,3,4,3,4,
                 3,4,3,4,3,4,3,4,3,4,3,4,3,4,
                 3,4,3,4,3,4,3,4,3,4,3,4,3,4,
                 3,4,3,4,3,4,3,4,3,4,3,4,3,4, 
                 3,4,3,4,3,4,3,4,3,4,3,4,3,4]

 var osc4and5 = [4,5,4,5,4,5,4,5,4,5,4,5,4,5,
 4,5,4,5,4,5,4,5,4,5,4,5,4,5,
 4,5,4,5,4,5,4,5,4,5,4,5,4,5,
 4,5,4,5,4,5,4,5,4,5,4,5,4,5,
 4,5,4,5,4,5,4,5,4,5,4,5,4,5,
 4,5,4,5,4,5,4,5,4,5,4,5,4,5]
 
 
/*Verify Sequence Function to apply before
each section where it involves submitting
a tmsequence
  */
 
 
 
 
 
 
 
 
 
function verifysequence(one,two)
{
  
  var scalecount = 0
   
    // Get the value of the input field
  
    two = document.getElementById(one).value;

  
//First, remove any white space from sequence
two = two.replace(/\s/g,"");
//alert(two)
/*This will check each digit after the dot
and check if the digit is in the scale list
if it is in the scale list scalecount gets
a point. scalecount will have to be equal 
to scales(5)
*/

for(i=0;i<scales;i++){
     if (two[10+i] in scale){
      scalecount++
       }
     }
  
/*Verify the following:
beginning digits are:tmi_s755b.
scalecount = scales
submitted sequence length = tmseqlength(15)
if true make the variable "verification" = "correct"
do the same for tmc_s755b. and tmg_s755b.
    */
           
if (two[0]=="t" && 
    two[1]=="m" &&
    two[2]=="i" &&
    two[3]=="_" &&
    two[4]=="s" &&
    two[5]=="7" && 
    two[6]=="5" &&
    two[7]=="5" &&
    two[8]=="b" &&
    two[9] == "." &&
    two.length==tmseqlength &&
    scalecount == scales
   ){
   var verification = "correct";
  }
  else if (
   two[0]=="t" && 
    two[1]=="m" &&
    two[2]=="c" &&
    two[3]=="_" &&
    two[4]=="s" &&
    two[5]=="7" && 
    two[6]=="5" &&
    two[7]=="5" &&
    two[8]=="b" &&
    two[9] == "." &&
    two.length==tmseqlength &&
    scalecount == scales
  
  ){
   var verification = "correct";
  } 
 
  else if (
   two[0]=="t" && 
    two[1]=="m" &&
    two[2]=="g" &&
    two[3]=="_" &&
    two[4]=="s" &&
    two[5]=="7" && 
    two[6]=="5" &&
    two[7]=="5" &&
    two[8]=="b" &&
   two[9] == "." && 
    two.length==tmseqlength &&
    scalecount == scales
  ) {
   var verification = "correct";
  } 
  
  else if (
    two.length==0
  ) {
   var verification = "correct";
  } 
  
  
/*If all those conditions are not satisfied
  then verification variable will be "incorrect"
  */
  
  else {
    var verification = "incorrect";
    }
  

  /*When this function is called before each submission section
  if verification is correct, then the function returns a 1
  if verification is incorrect, then the function returns a 0
  */
  var returned = [two.length,two]
  
  if (verification == "correct")
    
    {
      return returned
      }
  else 
    {
      return "no"
      }
  
  }
  
    
  
  function merge() {
    
    var newseq = [0,0,0,0,0,0,0,0,0,0,
                  0,0,0,0,0,0,0,0,0,0,
                  0,0,0,0,0,0,0,0,0,0,
                  0,0,0,0,0,0,0,0,0,0,
                  0,0,0,0,0,0,0,0,0,0,
                  0,0,0,0,0,0,0,0,0,0,
                  0,0,0,0,0,0,0,0,0,0,
                  0,0,0,0,0
                 ]
    var scalesequence1 = []
var scalesequence2 = []
var scalesequence3 = []
var scalesequence4 = []
var scalesequence5 = []
var scalesequence6 = []
var scalesequence7 = []
var scalesequence8 = []
var scalesequence9 = []

    var tmseq1
    var tmseq2
    var tmseq3
    var tmseq4
    var tmseq5
    var tmseq6
    var tmseq7
    var tmseq8
    var tmseq9
    
    
    
    
    
    var tester1 = verifysequence("tmseqsub1", tmseq1)
    var tester2 = verifysequence("tmseqsub2", tmseq2)
    var tester3 = verifysequence("tmseqsub3", tmseq3)
  var tester4 = verifysequence("tmseqsub4", tmseq4)
    var tester5 = verifysequence("tmseqsub5", tmseq5)
    var tester6 = verifysequence("tmseqsub6", tmseq6)
  var tester7 = verifysequence("tmseqsub7", tmseq7)
    var tester8 = verifysequence("tmseqsub8", tmseq8)
    var tester9 = verifysequence("tmseqsub9", tmseq9)
  
 
  /* alert(tester1[0]+" "+tester2[0]+" "+tester3[0]+" "+
       tester4[0]+" "+tester5[0]+" "+tester6[0]+" "+
        tester7[0]+" "+tester8[0]+" "+tester9[0]
       ) */
  if(tester1[0]+tester2[0]+tester3[0]+
     tester4[0]+tester5[0]+tester6[0]+
     tester7[0]+tester8[0]+tester9[0]
     > 169 &&
     tester1 != "no" &&
     tester2 != "no" &&
     tester3 != "no" &&
     tester4 != "no" &&
     tester5 != "no" &&
     tester6 != "no" &&
     tester7 != "no" &&
     tester8 != "no" &&
     tester9 != "no"
     
    ) 
    {
   // alert("Verified")
      
      
      
      
      /*We only need the last 75 digits.
 This will loop through them and assign 
 each digit to the empty list variable
 "scalesequence" (above) creating the list
    */
    
    for(i=0;i<scales;i++){
     scalesequence1.push(tester1[1][10+i])
     scalesequence2.push(tester2[1][10+i])
     scalesequence3.push(tester3[1][10+i])
     scalesequence4.push(tester4[1][10+i])
     scalesequence5.push(tester5[1][10+i])
     scalesequence6.push(tester6[1][10+i])
     scalesequence7.push(tester7[1][10+i])
     scalesequence8.push(tester8[1][10+i])
     scalesequence9.push(tester9[1][10+i])
      
      }
      
   
     
    
    
    //This will turn each element in each 
    //list into a number value instead
    //of a string 
    
      
      
    for(i=0;i<scales;i++){
    scalesequence1[i]= parseInt(scalesequence1[i])
    scalesequence2[i]= parseInt(scalesequence2[i])
    scalesequence3[i]= parseInt(scalesequence3[i])
    scalesequence4[i]= parseInt(scalesequence4[i])
    scalesequence5[i]= parseInt(scalesequence5[i])
    scalesequence6[i]= parseInt(scalesequence6[i])
    scalesequence7[i]= parseInt(scalesequence7[i])
    scalesequence8[i]= parseInt(scalesequence8[i])
    scalesequence9[i]= parseInt(scalesequence9[i])
      
     }
      
      /*now we have to check which sequences have numbers
      and which are "NaN" or empty  ("NaN" is what it creates 
      if there is no parseInt */
      
      
        var scalesequenceall = [0,scalesequence1,
           scalesequence2,
           scalesequence3,
           scalesequence4,   
           scalesequence5,
           scalesequence6,
           scalesequence7,   
           scalesequence8,
           scalesequence9         
                 ]                             
      
 /*
 for(i=1;i<10;i++)
        {
      alert(scalesequenceall[i][0])
      }
      */
      
 var scalesequencewithnumbers = []
 
      //creating a list for the sequence with numbers 
 
      for(i=1;i<10;i++)
        {
          
      if (isNaN(scalesequenceall[i][0])==false)
          {
      scalesequencewithnumbers.push(i)
        }
     
      }
      
    //  alert(scalesequencewithnumbers)
 
      
      //Now let's begin adding sequences
      
      for(i=0;i<scales;i++)
        {
          
       
      for(j=0;j<scalesequencewithnumbers.length;j++)
      {
        
     if (scalesequenceall[scalesequencewithnumbers[j]][i]==0)
        
        {
          //-50 will make it so if a digit has a zero it becomes -50
          //and then when adding the digits of the sequences it will 
          //be a value less then zero
          newseq[i]=-50 
          }
          
      newseq[i] += scalesequenceall[scalesequencewithnumbers[j]][i]
      
          }
      }
      
      //if the value is less than 0, it is converted to a zero
      for (i=0;i<newseq.length;i++)
        {
          if(newseq[i] < 1)
           {
            newseq[i]=0
           }
          }
      
      
      //the sequence may now have decimals
      //this will remove them and round them
      //or oscillate them as shown below
      
      for (i=0;i<newseq.length;i++)
        {
          if(newseq[i]/scalesequencewithnumbers.length == 1.5)
            {
            newseq[i] = osc1and2[a++]
            }
           else if (newseq[i]/scalesequencewithnumbers.length == 2.5)             
            {                    
            newseq[i] = osc2and3[a++]                  
            }
            else if (newseq[i]/scalesequencewithnumbers.length == 3.5)   
            {
            newseq[i] = osc3and4[a++]
            }                  
            else if (newseq[i]/scalesequencewithnumbers.length == 4.5)    
            {
            newseq[i] = osc4and5[a++]
            }                                    
            else                    
            {                    
            newseq[i] = Math.round(newseq[i]/scalesequencewithnumbers.length)
             }
      
              }
      
      
      //now need to add tm.. before the sequence
      //only when 2-3 have tmi will it be a guaranteed couple/trio
      //sequence else it will be a group sequence
    if(scalesequencewithnumbers.length < 4 &&
       tester1[1][2] != "g" &&
       tester2[1][2] != "g" &&
       tester3[1][2] != "g" &&
       tester4[1][2] != "g" &&
       tester5[1][2] != "g" &&
       tester6[1][2] != "g" &&
       tester7[1][2] != "g" &&
       tester8[1][2] != "g" &&
       tester9[1][2] != "g" &&
       tester1[1][2] != "c" &&
       tester2[1][2] != "c" &&
       tester3[1][2] != "c" &&
       tester4[1][2] != "c" &&
       tester5[1][2] != "c" &&
       tester6[1][2] != "c" &&
       tester7[1][2] != "c" &&
       tester8[1][2] != "c" &&
       tester9[1][2] != "c" 
       )
       {
       newseq.unshift("tmc_s755b.")
       
       }
       else
         {
          newseq.unshift("tmg_s755b.") 
           }
      
      
      
      
        //removing the commas
      
      newseq = newseq.join("")
      
  
   
      
      alert("Your new merged sequence of "+
            scalesequencewithnumbers.length+" sequences is "+
            newseq)
      
     
      document.getElementById("seqcreatem").value = newseq
  
      
    }
    else 
    {
    alert("At least one of the sequences are invalid")
     } 
      
      
    }
  
  
  
  function copyseqm() {
  /* Get the text field */
  var copyTextm = document.getElementById("seqcreatem");

  /* Select the text field */
  copyTextm.select(); 
  copyTextm.setSelectionRange(0, 99999); /*For mobile devices*/

  /* Copy the text inside the text field */
  document.execCommand("copy");

  /* Alert the copied text */
  alert("Copied sequence: " + copyTextm.value);
}
  
  
  
  
  
 </script> 



          
<script type="text/JavaScript">

/*
  valid tm sequence example (copy and paste):
  tmc_s755b.543215432154321543215432154321543215432154321543215432154321543215432155555
*/
  
//What the sequence must be compared to for verification and lists that will be created later
var rscale = ["0","1","2","3","4","5"]
//The number of scales will likely be 75, but if it change to 81, only the following two variables need to be changed:
var rscales = 75 /*if scales are 81, change to 81*/
var rtmseqlength = 85 /*if scales are 81, changed to 81+10 = 91 ("tmi_s815b." is 10 characters)*/

  
  

//The a variable will be incremented to
//go through the lists and oscillate between
//between the numbers when creating diverging sequence

 
/*Verify Sequence Function to apply before
each section where it involves submitting
a tmsequence
  */
function rverifysequence()
{
  
  var rscalecount = 0
  var rtmseq 
    // Get the value of the input field
  
    rtmseq = document.getElementById("seqrea").value;

  
//First, remove any white space from sequence
rtmseq = rtmseq.replace(/\s/g,"");
//alert(rtmseq)
/*This will check each digit after the dot
and check if the digit is in the scale list
if it is in the scale list scalecount gets
a point. scalecount will have to be equal 
to scales(5)
*/

for(i=0;i<rscales;i++){
     if (rtmseq[10+i] in rscale){
      rscalecount++
       }
     }
  
/*Verify the following:
beginning digits are:tmi_s755b.
scalecount = scales
submitted sequence length = tmseqlength(15)
if true make the variable "verification" = "correct"
do the same for tmc_s755b. and tmg_s755b.
    */
           
if (rtmseq[0]=="t" && 
    rtmseq[1]=="m" &&
    rtmseq[2]=="i" &&
    rtmseq[3]=="_" &&
    rtmseq[4]=="s" &&
    rtmseq[5]=="7" && 
    rtmseq[6]=="5" &&
    rtmseq[7]=="5" &&
    rtmseq[8]=="b" &&
    rtmseq[9] == "." &&
    rtmseq.length==rtmseqlength &&
    rscalecount == rscales
   ){
   var rverification = "correct";
  }
  else if (
   rtmseq[0]=="t" && 
    rtmseq[1]=="m" &&
    rtmseq[2]=="c" &&
    rtmseq[3]=="_" &&
    rtmseq[4]=="s" &&
    rtmseq[5]=="7" && 
    rtmseq[6]=="5" &&
    rtmseq[7]=="5" &&
    rtmseq[8]=="b" &&
    rtmseq[9] == "." &&
    rtmseq.length==rtmseqlength &&
    rscalecount == rscales
  
  ){
   var rverification = "correct";
  } 
 
  else if (
   rtmseq[0]=="t" && 
    rtmseq[1]=="m" &&
    rtmseq[2]=="g" &&
    rtmseq[3]=="_" &&
    rtmseq[4]=="s" &&
    rtmseq[5]=="7" && 
    rtmseq[6]=="5" &&
    rtmseq[7]=="5" &&
    rtmseq[8]=="b" &&
   rtmseq[9] == "." && 
    rtmseq.length==rtmseqlength &&
    rscalecount == rscales
  ) {
   var rverification = "correct";
  } 
  
/*If all those conditions are not satisfied
  then verification variable will be "incorrect"
  */
  
  else {
    var rverification = "incorrect";
    }
  

  /*When this function is called before each submission section
  if verification is correct, then the function returns a 1
  if verification is incorrect, then the function returns a 0
  */
  if (rverification == "correct")
    {
      return 1
      }
  else 
    {
      return 0
      }
  
  }
  
  
  //END OF verifysequence functuon
  
  
  
  
  
  
//Functio
  
function sequencereader() {
  
  var rscalesequence = []

  var rtmseq 
    // Get the value of the input field
    rtmseq = document.getElementById("seqrea").value;
  
 /*the following will be either a 1 or 0 from the
  return value of the verifysequence function
  if tester is 1 then the sequence is valid
  if tester is 0 then the sequence is invalid
  */
  var rtester = rverifysequence()
 // alert("tester = "+tester+";  1 = verified 0 = unverified")
  //If tester is 1, then we can proceed with the diverge function
  //If tester is 0, then the code is skipped to the "else" statement afterwards
  if(rtester==1) {
    
 /*We only need the last 75 digits.
 This will loop through them and assign 
 each digit to the empty list variable
 "scalesequence" (above) creating the list
    */
    
    for(i=0;i<rscales;i++){
      
      if(rtmseq[10+i] ==0)
        {
     rscalesequence.push("No Answer (0)")
     }
      
      if(rtmseq[10+i] ==1)
        {
     rscalesequence.push("No (1)")
     }
      
      if(rtmseq[10+i] ==2)
        {
     rscalesequence.push("Hardly (2)")
     }
      
      if(rtmseq[10+i] ==3)
        {
     rscalesequence.push("Neutral (3)")
     }
      
      if(rtmseq[10+i] ==4)
        {
     rscalesequence.push("Somewhat (4)")
     }
      
      if(rtmseq[10+i] ==5)
        {
     rscalesequence.push("Yes (5)")
     }
      
      
      
      
      }
    
    
    
    
    
    
    
    //This will turn each element in the 
    //list into a number value instead
    //of a string 
   /* 
    for(i=0;i<scalesequence.length;i++){
    scalesequence[i]= parseInt(scalesequence[i])
     }
   */
   var rpersonsl =  ["universal",
  "religous",
  "intuitive",
  "spiritual",
  "contemplative",
  "logic",
  "avid reader",
  "sensing, sensual",
  "historian",
  "science",
  "mechanical",
  "technology",
  "traditional",
  "collectivist",
  "individualist",
  "inventor or creator",
  "business (economic)",
  "nonprofit",
  "a director",
  "a legal/law",
  "healer",
  "teacher",
  "gamer",
  "love music",
  "love movies",
  "competitive",
  "social",
  "social performer",
  "common, normal",
  "Animal socializing",
  "Higher intelligences",
  "chef",
  "vegan",
  "organic food",
  "processed food",
  "carnivorous",
  "happy",
  "caring",
  "a humorous/joking",
  "serious",
  "assertive",
  "looking for a serious relationship",
  "promiscuous",
  "heterosexual",
  "homosexual",
  "have very outward reproductive organs",
  "have very inward reproductive organs",
  "above average weight",
  "slim and slender",
  "physically fit",
  "above average height",
  "mobile/movement performer",
  "transportative/transporter",
  "security/protector",
  "elderly",
  "physically youthful",
  "the big city",
  "nature",
  "daytime",
  "nighttime",
  "space or astral exploration",
  "prefer hot climates",
  "prefer cold climates",
  "prefer to live in oceanic environments",
  "prefer to live in forest environments",
  "prefer to live in desert environments",
  "prefer to live in tundra environments",
  "European ancestosrs",
  "Central and South Asia ancestors",
  "East Asian and Native American ancestors",
  "Sub-Saharan Africa ancestors",
  "Western Asia and North Africa ancestors",
  "Melanesian ancestors",
  "a traveler",
  "financially rich and wealthy"]
    
   
    
    var rpersonsl2 =[]
    for (i=0;i<rpersonsl.length;i++)
      {
    rpersonsl2.push(rpersonsl[i])
             }       
    
    
   for(i=0;i<rscalesequence.length;i++){
   rpersonsl[i] = [i+1]+". "+rpersonsl[i]+": "+rscalesequence[i]+"\n\n"
     }
    
    if (rtmseq[2]=="i"  )
        {
    rpersonsl.unshift("Person: Individual \n Sequence Type: Scale \n Number of Scales: 75 \n Range of Scales: 5 \n Version: Beta \n\n" )
        }
      else if (rtmseq[2]=="c"  )
        {
      rpersonsl.unshift("Person: Couple/Trio \n Sequence Type: Scale \n Number of Scales: 75 \n Range of Scales: 5 \n Version: Beta \n\n" )
        }
    else if (rtmseq[2]=="g"  )
        {
      rpersonsl.unshift("Person: Group \n Sequence Type: Scale \n Number of Scales: 75 \n Range of Scales: 5 \n Version: Beta \n\n" )
        }
      
      
      rpersonsl = rpersonsl.join(" ")
    
    
    
    for(i=0;i<rscalesequence.length;i++){
   rpersonsl2[i] = [i+1]+". "+rpersonsl2[i]+": "+rscalesequence[i]+"<br><br>"
     }
    
    if (rtmseq[2]=="i"  )
        {
    rpersonsl2.unshift("Person: Individual <br> Sequence Type: Scale <br> Number of Scales: 75 <br> Range of Scales: 5 <br> Version: Beta <br><br>" )
        }
      else if (rtmseq[2]=="c"  )
        {
      rpersonsl2.unshift("Person: Couple/Trio <br> Sequence Type: Scale <br> Number of Scales: 75 <br> Range of Scales: 5 <br> Version: Beta <br><br>" )
        }
    else if (rtmseq[2]=="g"  )
        {
      rpersonsl2.unshift("Person: Group \n Sequence Type: Scale \n Number of Scales: 75 <br> Range of Scales: 5 <br> Version: Beta <br><br>" )
        }
      
      
      rpersonsl2 = rpersonsl2.join(" ")
    
    
    
    
  //  alert(rscalesequence)
   
    alert(rpersonsl)
   
   document.getElementById("sequencereaderd").innerHTML = rpersonsl2; 
    

    }
  
  //If the "tester" (verification) in beginning was 0 instead of 1:
  
    else {
    
    alert ("Invalid Sequence")
    document.getElementById("sequencereaderd").innerHTML = ""; 
    
    
    }
 
   
   
  
  }
  
  
 //  END OF DIVERGE FUNCTION
  
  

  </script> 

<script>
  
  
  function createword()
  {
    
       
  var ya0 =document.getElementById("ya").value
       if (ya0.length>0){
  ya0 = ya0.replace(/\s/g,'')
  ya0 = ya0.split(',')
 }
      
  var yo0 =document.getElementById("yo").value
  if (yo0.length>0){
  yo0 = yo0.replace(/\s/g,'')
  yo0 = yo0.split(',')
    }
  var yi0 =document.getElementById("yi").value
  if (yi0.length>0){
  yi0 = yi0.replace(/\s/g,'')
  yi0 = yi0.split(',')
    }
  var yl0 =document.getElementById("yl").value
 if (yl0.length>0){
  yl0 = yl0.replace(/\s/g,'')
  yl0 = yl0.split(',')
    }
    var yh0 =document.getElementById("yh").value
  if (yh0.length>0){
    yh0 = yh0.replace(/\s/g,'')
  yh0 = yh0.split(',')
    }
  var yc0 =document.getElementById("yc").value
  if (yc0.length>0){
  yc0 = yc0.replace(/\s/g,'')
  yc0 = yc0.split(',')
    }
    
    
    var ta0 =document.getElementById("ta").value
       if (ta0.length>0){
  ta0 = ta0.replace(/\s/g,'')
  ta0 = ta0.split(',')
 }
      
  var to0 =document.getElementById("to").value
  if (to0.length>0){
  to0 = to0.replace(/\s/g,'')
  to0 = to0.split(',')
    }
  var ti0 =document.getElementById("ti").value
  if (ti0.length>0){
  ti0 = ti0.replace(/\s/g,'')
  ti0 = ti0.split(',')
    }
  var tl0 =document.getElementById("tl").value
 if (tl0.length>0){
  tl0 = tl0.replace(/\s/g,'')
  tl0 = tl0.split(',')
    }
    var th0 =document.getElementById("th").value
  if (th0.length>0){
    th0 = th0.replace(/\s/g,'')
  th0 = th0.split(',')
    }
  
    
    
    
    
    
    
    
    if(document.getElementById("sii").checked == true)
     {
       for(i=0;i<ya0.length;i++)
         {
         ya0[i]= "tmi_"+ya0[i]
           }
       }
    else if (document.getElementById("scc").checked == true)
     {
       for(i=0;i<ya0.length;i++)
         {
         ya0[i]= "tmc_"+ya0[i]
           }
       }
       
       else if (document.getElementById("sgg").checked == true)
     {
       for(i=0;i<ya0.length;i++)
         {
         ya0[i]= "tmg_"+ya0[i]
           }
       
       }
    
    
    
    if(document.getElementById("sii").checked == true)
     {
       for(i=0;i<yi0.length;i++)
         {
         yi0[i]= "tmii_"+yi0[i]
           }
       }
    else if (document.getElementById("scc").checked == true)
     {
       for(i=0;i<yi0.length;i++)
         {
         yi0[i]= "tmci_"+yi0[i]
           }
       }
       
       else if (document.getElementById("sgg").checked == true)
     {
       for(i=0;i<yi0.length;i++)
         {
         yi0[i]= "tmgi_"+yi0[i]
           }
       
       }
    
    
    if(document.getElementById("sii").checked == true)
     {
       for(i=0;i<yo0.length;i++)
         {
         yo0[i]= "tmio_"+yo0[i]
           }
       }
    else if (document.getElementById("scc").checked == true)
     {
       for(i=0;i<yo0.length;i++)
         {
         yo0[i]= "tmco_"+yo0[i]
           }
       }
       
       else if (document.getElementById("sgg").checked == true)
     {
       for(i=0;i<yo0.length;i++)
         {
         yo0[i]= "tmgo_"+yo0[i]
           }
       
       }
    
    
    if(document.getElementById("sii").checked == true)
     {
       for(i=0;i<yl0.length;i++)
         {
         yl0[i]= "tmil_"+yl0[i]
           }
       }
    else if (document.getElementById("scc").checked == true)
     {
       for(i=0;i<yl0.length;i++)
         {
         yl0[i]= "tmcl_"+yl0[i]
           }
       }
       
       else if (document.getElementById("sgg").checked == true)
     {
       for(i=0;i<yl0.length;i++)
         {
         yl0[i]= "tmgl_"+yl0[i]
           }
       
       }
    
    
    
    
    if(document.getElementById("sii").checked == true)
     {
       for(i=0;i<yh0.length;i++)
         {
         yh0[i]= "tmih_"+yh0[i]
           }
       }
    else if (document.getElementById("scc").checked == true)
     {
       for(i=0;i<yh0.length;i++)
         {
         yh0[i]= "tmch_"+yh0[i]
           }
       }
       
       else if (document.getElementById("sgg").checked == true)
     {
       for(i=0;i<yh0.length;i++)
         {
         yh0[i]= "tmgh_"+yh0[i]
           }
       
       }
    
    
    if(document.getElementById("sii").checked == true)
     {
       for(i=0;i<yc0.length;i++)
         {
         yc0[i]= "tmic_"+yc0[i]
           }
       }
    else if (document.getElementById("scc").checked == true)
     {
       for(i=0;i<yc0.length;i++)
         {
         yc0[i]= "tmcc_"+yc0[i]
           }
       }
       
       else if (document.getElementById("sgg").checked == true)
     {
       for(i=0;i<yc0.length;i++)
         {
         yc0[i]= "tmgc_"+yc0[i]
           }
       
       }
    
    
    //LOOKING FOR
    
    
    if(document.getElementById("sii").checked == true &&  
      document.getElementById("lii").checked == true
      )
     {
       for(i=0;i<ta0.length;i++)
         {
         ta0[i]= "tmifi_"+ta0[i]
           }
       }
    else if (document.getElementById("scc").checked == true &&
            document.getElementById("lii").checked == true
            )
     {
       for(i=0;i<ta0.length;i++)
         {
         ta0[i]= "tmcfi_"+ta0[i]
           }
       }
       
       else if (document.getElementById("sgg").checked == true &&
               document.getElementById("lii").checked == true
               )
     {
       for(i=0;i<ta0.length;i++)
         {
         ta0[i]= "tmgfi_"+ta0[i]
           }
       
       }
    
    
    if(document.getElementById("sii").checked == true &&  
      document.getElementById("lii").checked == true
      )
     {
       for(i=0;i<to0.length;i++)
         {
         to0[i]= "tmifio_"+to0[i]
           }
       }
    else if (document.getElementById("scc").checked == true &&
            document.getElementById("lii").checked == true
            )
     {
       for(i=0;i<to0.length;i++)
         {
         to0[i]= "tmcfio_"+to0[i]
           }
       }
       
       else if (document.getElementById("sgg").checked == true &&
               document.getElementById("lii").checked == true
               )
     {
       for(i=0;i<to0.length;i++)
         {
         to0[i]= "tmgfio_"+to0[i]
           }
       
       }
    
    
    
    if(document.getElementById("sii").checked == true &&  
      document.getElementById("lii").checked == true
      )
     {
       for(i=0;i<ti0.length;i++)
         {
         ti0[i]= "tmifii_"+ti0[i]
           }
       }
    else if (document.getElementById("scc").checked == true &&
            document.getElementById("lii").checked == true
            )
     {
       for(i=0;i<ti0.length;i++)
         {
         ti0[i]= "tmcfii_"+ti0[i]
           }
       }
       
       else if (document.getElementById("sgg").checked == true &&
               document.getElementById("lii").checked == true
               )
     {
       for(i=0;i<ti0.length;i++)
         {
         ti0[i]= "tmgfii_"+ti0[i]
           }
       
       }
    
    
    
    
    if(document.getElementById("sii").checked == true &&  
      document.getElementById("lii").checked == true
      )
     {
       for(i=0;i<tl0.length;i++)
         {
         tl0[i]= "tmifil_"+tl0[i]
           }
       }
    else if (document.getElementById("scc").checked == true &&
            document.getElementById("lii").checked == true
            )
     {
       for(i=0;i<tl0.length;i++)
         {
         tl0[i]= "tmcfil_"+tl0[i]
           }
       }
       
       else if (document.getElementById("sgg").checked == true &&
               document.getElementById("lii").checked == true
               )
     {
       for(i=0;i<tl0.length;i++)
         {
         tl0[i]= "tmgfil_"+tl0[i]
           }
       
       }
    
    
    
    
    if(document.getElementById("sii").checked == true &&  
      document.getElementById("lii").checked == true
      )
     {
       for(i=0;i<th0.length;i++)
         {
         th0[i]= "tmifih_"+th0[i]
           }
       }
    else if (document.getElementById("scc").checked == true &&
            document.getElementById("lii").checked == true
            )
     {
       for(i=0;i<th0.length;i++)
         {
         th0[i]= "tmcfih_"+th0[i]
           }
       }
       
       else if (document.getElementById("sgg").checked == true &&
               document.getElementById("lii").checked == true
               )
     {
       for(i=0;i<th0.length;i++)
         {
         th0[i]= "tmgfih_"+th0[i]
           }
       
       }
    
    
    
    
    
    
    
    
    
    
    if(document.getElementById("sii").checked == true &&  
      document.getElementById("lcc").checked == true
      )
     {
       for(i=0;i<ta0.length;i++)
         {
         ta0[i]= "tmifc_"+ta0[i]
           }
       }
    else if (document.getElementById("scc").checked == true &&
            document.getElementById("lcc").checked == true
            )
     {
       for(i=0;i<ta0.length;i++)
         {
         ta0[i]= "tmcfc_"+ta0[i]
           }
       }
       
       else if (document.getElementById("sgg").checked == true &&
               document.getElementById("lcc").checked == true
               )
     {
       for(i=0;i<ta0.length;i++)
         {
         ta0[i]= "tmgfc_"+ta0[i]
           }
       
       }
    
    
    if(document.getElementById("sii").checked == true &&  
      document.getElementById("lcc").checked == true
      )
     {
       for(i=0;i<to0.length;i++)
         {
         to0[i]= "tmifco_"+to0[i]
           }
       }
    else if (document.getElementById("scc").checked == true &&
            document.getElementById("lcc").checked == true
            )
     {
       for(i=0;i<to0.length;i++)
         {
         to0[i]= "tmcfco_"+to0[i]
           }
       }
       
       else if (document.getElementById("sgg").checked == true &&
               document.getElementById("lcc").checked == true
               )
     {
       for(i=0;i<to0.length;i++)
         {
         to0[i]= "tmgfco_"+to0[i]
           }
       
       }
    
    
    
    if(document.getElementById("sii").checked == true &&  
      document.getElementById("lcc").checked == true
      )
     {
       for(i=0;i<ti0.length;i++)
         {
         ti0[i]= "tmifci_"+ti0[i]
           }
       }
    else if (document.getElementById("scc").checked == true &&
            document.getElementById("lcc").checked == true
            )
     {
       for(i=0;i<ti0.length;i++)
         {
         ti0[i]= "tmcfci_"+ti0[i]
           }
       }
       
       else if (document.getElementById("sgg").checked == true &&
               document.getElementById("lcc").checked == true
               )
     {
       for(i=0;i<ti0.length;i++)
         {
         ti0[i]= "tmgfci_"+ti0[i]
           }
       
       }
    
    
    
    
    if(document.getElementById("sii").checked == true &&  
      document.getElementById("lcc").checked == true
      )
     {
       for(i=0;i<tl0.length;i++)
         {
         tl0[i]= "tmifcl_"+tl0[i]
           }
       }
    else if (document.getElementById("scc").checked == true &&
            document.getElementById("lcc").checked == true
            )
     {
       for(i=0;i<tl0.length;i++)
         {
         tl0[i]= "tmcfcl_"+tl0[i]
           }
       }
       
       else if (document.getElementById("sgg").checked == true &&
               document.getElementById("lcc").checked == true
               )
     {
       for(i=0;i<tl0.length;i++)
         {
         tl0[i]= "tmgfcl_"+tl0[i]
           }
       
       }
    
    
    
    
    if(document.getElementById("sii").checked == true &&  
      document.getElementById("lcc").checked == true
      )
     {
       for(i=0;i<th0.length;i++)
         {
         th0[i]= "tmifch_"+th0[i]
           }
       }
    else if (document.getElementById("scc").checked == true &&
            document.getElementById("lcc").checked == true
            )
     {
       for(i=0;i<th0.length;i++)
         {
         th0[i]= "tmcfch_"+th0[i]
           }
       }
       
       else if (document.getElementById("sgg").checked == true &&
               document.getElementById("lcc").checked == true
               )
     {
       for(i=0;i<th0.length;i++)
         {
         th0[i]= "tmgfch_"+th0[i]
           }
       
       }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    if(document.getElementById("sii").checked == true &&  
      document.getElementById("lgg").checked == true
      )
     {
       for(i=0;i<ta0.length;i++)
         {
         ta0[i]= "tmifg_"+ta0[i]
           }
       }
    else if (document.getElementById("scc").checked == true &&
            document.getElementById("lgg").checked == true
            )
     {
       for(i=0;i<ta0.length;i++)
         {
         ta0[i]= "tmcfg_"+ta0[i]
           }
       }
       
       else if (document.getElementById("sgg").checked == true &&
               document.getElementById("lgg").checked == true
               )
     {
       for(i=0;i<ta0.length;i++)
         {
         ta0[i]= "tmgfg_"+ta0[i]
           }
       
       }
    
    
    if(document.getElementById("sii").checked == true &&  
      document.getElementById("lgg").checked == true
      )
     {
       for(i=0;i<to0.length;i++)
         {
         to0[i]= "tmifgo_"+to0[i]
           }
       }
    else if (document.getElementById("scc").checked == true &&
            document.getElementById("lgg").checked == true
            )
     {
       for(i=0;i<to0.length;i++)
         {
         to0[i]= "tmcfgo_"+to0[i]
           }
       }
       
       else if (document.getElementById("sgg").checked == true &&
               document.getElementById("lgg").checked == true
               )
     {
       for(i=0;i<to0.length;i++)
         {
         to0[i]= "tmgfgo_"+to0[i]
           }
       
       }
    
    
    
    if(document.getElementById("sii").checked == true &&  
      document.getElementById("lgg").checked == true
      )
     {
       for(i=0;i<ti0.length;i++)
         {
         ti0[i]= "tmifgi_"+ti0[i]
           }
       }
    else if (document.getElementById("scc").checked == true &&
            document.getElementById("lgg").checked == true
            )
     {
       for(i=0;i<ti0.length;i++)
         {
         ti0[i]= "tmcfgi_"+ti0[i]
           }
       }
       
       else if (document.getElementById("sgg").checked == true &&
               document.getElementById("lgg").checked == true
               )
     {
       for(i=0;i<ti0.length;i++)
         {
         ti0[i]= "tmgfgi_"+ti0[i]
           }
       
       }
    
    
    
    
    if(document.getElementById("sii").checked == true &&  
      document.getElementById("lgg").checked == true
      )
     {
       for(i=0;i<tl0.length;i++)
         {
         tl0[i]= "tmifgl_"+tl0[i]
           }
       }
    else if (document.getElementById("scc").checked == true &&
            document.getElementById("lgg").checked == true
            )
     {
       for(i=0;i<tl0.length;i++)
         {
         tl0[i]= "tmcfgl_"+tl0[i]
           }
       }
       
       else if (document.getElementById("sgg").checked == true &&
               document.getElementById("lgg").checked == true
               )
     {
       for(i=0;i<tl0.length;i++)
         {
         tl0[i]= "tmgfgl_"+tl0[i]
           }
       
       }
    
    
    
    
    if(document.getElementById("sii").checked == true &&  
      document.getElementById("lgg").checked == true
      )
     {
       for(i=0;i<th0.length;i++)
         {
         th0[i]= "tmifgh_"+th0[i]
           }
       }
    else if (document.getElementById("scc").checked == true &&
            document.getElementById("lgg").checked == true
            )
     {
       for(i=0;i<th0.length;i++)
         {
         th0[i]= "tmcfgh_"+th0[i]
           }
       }
       
       else if (document.getElementById("sgg").checked == true &&
               document.getElementById("lgg").checked == true
               )
     {
       for(i=0;i<th0.length;i++)
         {
         th0[i]= "tmgfgh_"+th0[i]
           }
       
       }
    
    
    
    
    
    
    
    
    var yall = []
    
    
    if (ya0.length>0){
      ya0 = ya0.join(', ')
    yall.push(ya0)
      }
    if (yo0.length>0){
      yo0 = yo0.join(', ')
    yall.push(yo0)
      }
    if (yi0.length>0){
      yi0 = yi0.join(', ')
    yall.push(yi0)
      }
    if (yl0.length>0){
      yl0 = yl0.join(', ')
    yall.push(yl0)
      }
    if (yh0.length>0){
      yh0 = yh0.join(', ')
    yall.push(yh0)
      }
    if (yc0.length>0){
      yc0 = yc0.join(', ')
    yall.push(yc0)
      }
    if (ta0.length>0){
      ta0 = ta0.join(', ')
    yall.push(ta0)
      }
    if (to0.length>0){
      to0 = to0.join(', ')
    yall.push(to0)
      }
    if (ti0.length>0){
      ti0 = ti0.join(', ')
    yall.push(ti0)
      }
    if (tl0.length>0){
      tl0 = tl0.join(', ')
    yall.push(tl0)
      }
    if (th0.length>0){
      th0 = th0.join(', ')
    yall.push(th0)
      }
    
    
    

    yall.unshift("TagiMagi.com: tmi00_")
    yall = yall.join(', ')
    
    //yall = yall.split(',').join(', ')
      //alert(yall[4]) 
    alert("Your TM word profile is: \n\n"+yall)
  
    document.getElementById("wordprofile1").innerHTML = yall;
 
    document.getElementById("wordprofile2").value = yall;
 
  }
  
  
  function copywordp() {
  /* Get the text field */
  var copyTextw = document.getElementById("wordprofile2");

  /* Select the text field */
  copyTextw.select(); 
  copyTextw.setSelectionRange(0, 99999); /*For mobile devices*/

  /* Copy the text inside the text field */
  document.execCommand("copy");

  /* Alert the copied text */
  alert("Copied TM Word tag profile: " + copyTextw.value);
}
  
  
  

</script>

@endsection