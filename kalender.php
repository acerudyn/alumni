<?php
$month= date ("m");
$year=date("Y");
$day=date("d");
$endDate=date("t",mktime(0,0,0,$month,$day,$year));
echo '<font face="arial" size="1">';
echo '<table align="center" border="0" cellpadding=5 cellspacing=5 style=""><tr><td align=center>';
echo "Hari ini tanggal : ".date("d F Y ",mktime(0,0,0,$month,$day,$year));
echo '</td></tr></table>';
echo '<table align="center" border="3" cellpadding=5 cellspacing=0 style="border:5px solid #ffff">
<tr bgcolor="cyan">
<td align=center><font color=green>M</font></td>
<td align=center>S</td>
<td align=center>S</td>
<td align=center>R</td>
<td align=center>K</td>
<td align=center>J</td>
<td align=center>S</td>
</tr>';
$s=date ("w", mktime (0,0,0,$month,1,$year));
for ($ds=1;$ds<=$s;$ds++) {
echo "<td style=\"font-family:arial;color:#B3D9FF\" align=center valign=middle bgcolor=\"white\">
</td>";}
for ($d=1;$d<=$endDate;$d++) {
if (date("w",mktime (0,0,0,$month,$d,$year)) == 0) { echo "<tr>"; }
$fontColor="#000000";
if (date("D",mktime (0,0,0,$month,$d,$year)) == "Sun") { $fontColor="red"; }
echo "<td style=\"font-family:arial;color:#333333\" align=center valign=middle> <span style=\"color:$fontColor\">$d</span></td>";
if (date("w",mktime (0,0,0,$month,$d,$year)) == 6) { echo "</tr>"; }}
echo '</table>'; ?>