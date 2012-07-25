<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">
<HTML>
<HEAD>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1">
<TITLE>
   feedback form for GramPrabha ;
</TITLE>
<STYLE TYPE="text/css">

</STYLE>

</HEAD>

<BODY TEXT="#666633" BGCOLOR="orange">
<DIV align="center">

<IMG SRC="images/feedback.gif" ALT="Feedback">

<P CLASS=text>  help me keep posted with your queries,suggestions & appraisals

<hr>
<FORM METHOD=POST ACTION= "feedback.php" >
<TABLE>
  <TR>
    <TD CLASS=label>
       Your Name
    </TD>
    <TD CLASS=form>
      <INPUT NAME=Name TYPE=TEXT>
    </TD>
  </TR>

  <TR>
    <TD CLASS=label>
       Email Address
    </TD>
    <TD CLASS=form>
      <INPUT NAME=Email TYPE=TEXT>
    </TD>
  </TR>

  <TR>
    <TD CLASS=label>
       you are
    </TD>
    <TD CLASS=label>
      Registered User <INPUT TYPE=RADIO NAME=Retail VALUE="reg"  >
      Unregistered User <INPUT TYPE=RADIO NAME=Retail VALUE="unreg"  CHECKED>
      <BR>
      farmer <INPUT TYPE=CHECKBOX NAME="Enthusiast">
      government executive <INPUT TYPE=CHECKBOX NAME="ProArtist"><BR>
      faculty member <INPUT TYPE=CHECKBOX NAME="Hobbiest">
      business executive <INPUT TYPE=CHECKBOX NAME="HendrixFan">
    </TD>
  </TR>

  <TR>
    <TD CLASS=label>
       Other
    </TD>
    <TD CLASS=form>
      <INPUT NAME=Other TYPE=TEXT>
    </TD>
  </TR>

  <TR VALIGN=TOP>
    <TD CLASS=label>
       Comments
    </TD>
    <TD>
       <TEXTAREA COLS=30 ROWS=5 NAME=message CLASS=default></TEXTAREA>
    </TD>
  </TR>
  <TR><TD HEIGHT=20></TD></TR>
  <TR><TD></TD>
    <TD><INPUT TYPE=image NAME=submit SRC="images/send.gif" >
    </TD>
  </TR>
</TABLE>
<hr>
</FORM>
</DIV>

</BODY>
</HTML>
