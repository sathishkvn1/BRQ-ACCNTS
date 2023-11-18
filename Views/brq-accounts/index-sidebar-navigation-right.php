<style>
  .sidenav {
  height: calc(100% - 50px);
  width: 170px;
  position: fixed;
  z-index: 999;
  top: 49px;
  right: 0;
  background-color: #def1fc;
  overflow-x: hidden;
}

.sidenav a {
  padding: 3px 4px;
  text-decoration: none;
  font-size: 14px;
  color: #000000;
  display: block;
  background: white;
  margin: 6px 4px;
  box-shadow: 1px 1px 0px #dddddd;
}

.sidenav a:hover {
  color: grey;
}
.sidenav a:hover .short-key
{
  color: grey !important;
}
.sidenav a:hover .right-arrow
{
  color: grey !important;
  border-left:1px solid grey;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
<div class="sidenav accounts-sidebar">
  <a href="#about" tabindex="-1"><span class="short-key">F2:</span>Date <span class="right-arrow"><i class="fa fa-angle-left"></i></span></a>
  <a href="#about" tabindex="-1"><span class="short-key">F3:</span>Company <span class="right-arrow"><i class="fa fa-angle-left"></i></span></a>
</div>