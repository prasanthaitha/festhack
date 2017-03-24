<html>

<form class="navbar-form navbar-left" role="search" action="{{URL::to('/citysearch')}}" method="post">
 {{ csrf_field() }}
Search
<input type=text name="search" id="search" placeholder="seach what's happening in ue city">
<input type="submit" value="submit">

</form>
<a href="/reports/create">Reports</a>


<form class="navbar-form navbar-left" role="search" action="{{URL::to('/rstatus')}}" method="post">
 {{ csrf_field() }}
Problem/complaint status
<input type=text name="rstatus" id="rstatus" placeholder="ticket no.">
<input type=text name="rmail" id="rmail" placeholder="mail-id">
<input type="submit" value="submit">

</form>