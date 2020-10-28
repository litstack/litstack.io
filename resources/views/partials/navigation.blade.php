<nav id="main-navigation" class="border-gray-500 border-solid border-b">
    <div class="logo">Litstack</div>
    <div class="flex">
        <ul class="links">
            <li class="active border-indigo-700">Documentation</li>
            <li class="border-indigo-700">Packages</li>
        </ul>
        <div class="search" style="width:300px">

            <x-dd-search-input repo="litstack/docs" version="master" />
        
        </div>
    </div>
    <script async type="text/javascript" src="//cdn.carbonads.com/carbon.js?serve=CEBIV2Q7&placement=litstackio" id="_carbonads_js"></script>
</nav>
<x-style lang="scss">
$navigation-height: 90px;
nav#main-navigation{
    height: $navigation-height;
    position: relative;
    justify-content: space-between;
    display:flex;

    ul.links{
        display: flex;

        li{
            line-height: $navigation-height;
            border-bottom-width: 0px;

            &.active, &:hover{
                border-bottom-width: 2px;
            }
        }
        
    }
}
#carbonads {
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu,
    Cantarell, "Helvetica Neue", Helvetica, Arial, sans-serif;
  }
  
  #carbonads {
    display: flex;
    max-width: 330px;
    background-color: hsl(0, 0%, 98%);
    box-shadow: 0 1px 4px 1px hsla(0, 0%, 0%, .1);
  }
  
  #carbonads a {
    color: inherit;
    text-decoration: none;
  }
  
  #carbonads a:hover {
    color: inherit;
  }
  
  #carbonads span {
    position: relative;
    display: block;
    overflow: hidden;
  }
  
  #carbonads .carbon-wrap {
    display: flex;
  }
  
  .carbon-img {
    display: block;
    margin: 0;
    line-height: 1;
  }
  
  .carbon-img img {
    display: block;
  }
  
  .carbon-text {
    font-size: 13px;
    padding: 10px;
    line-height: 1.5;
    text-align: left;
  }
  
  .carbon-poweredby {
    display: block;
    padding: 8px 10px;
    background: repeating-linear-gradient(-45deg, transparent, transparent 5px, hsla(0, 0%, 0%, .025) 5px, hsla(0, 0%, 0%, .025) 10px) hsla(203, 11%, 95%, .4);
    text-align: center;
    text-transform: uppercase;
    letter-spacing: .5px;
    font-weight: 600;
    font-size: 9px;
    line-height: 1;
  }
</x-style>