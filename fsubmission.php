@media (max-width:815px)
{
  .responsive
  {
    display:block;
    background:none;
  }
  .nav-bar ul
  {
    width:100%;
    background:none;
    display:none;
  }
  .nav-bar ul li
  {
    display:block;
    text-align:left;
    background: none;
  }
  .nav-bar li ul.dropdown
  {
    position: relative;
    left:5%;
  }

  input[type=checkbox]
  {
       display: none;
       -webkit-appearance: none;
  }


input[type=checkbox]:checked ~ .nav-bar li ul.dropdown
{
 display:none;
}
input[type=checkbox]:checked ~ .nav-bar li:hover ul.dropdown
{
    display:block;
}
input[type=checkbox]:checked ~ .nav-bar ul
{
      display: block;
}
}

@media (max-width: 2200px)
{
input[type=checkbox]
{
  display:none;
}
}
