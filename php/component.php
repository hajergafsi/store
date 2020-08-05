<?php

function component($productname,$productprice,$oldprice,$productimg,$link){
  $element = "
 
  
    <div class=\"col-md-3 col-sm-6 my-3 my-md-0 col-xs-6\" style=\"height: 401px; background: none;\">
      <form action=\"#\" method=\"post\">
        <div  class=\"shopp\" style=\"background: none; border: none\">
          <div>
            <a href=\"$link\"><img src=\"$productimg\" alt=\"image\" class=\"img-fluid card-img-top \"  style=\"height: 250px; min-width: 150px;\"></a>
          </div>
          <div class=\"card body\" style=\"background: none; border: none\" >
            <h5 class=\"card-title\" style=\"font-size: 21px; font-family: 'Fascinate-Regular'; margin-top: 10px\">$productname</h5>
            <h6>
              <i class=\"fas fa-star\"></i>
              <i class=\"fas fa-star\"></i>
              <i class=\"fas fa-star\"></i>
              <i class=\"fas fa-star\"></i>
              <i class=\"fas fa-star\"></i>
            </h6>
            <p class=\"card-text\" style=\"font-size: 16px; font-family: 'JuliusSansOne-Regular';\">
              The new look welcomes you
            </p>
            <h5>
              <small><s class=\"text-secondary\" style=\"font-size: 12px\">£$oldprice</s></small>
              <span class=\"price\" style=\"font-size: 15px\">£$productprice</span>
            </h5>
            <button type=\"submit\" class=\"btn btn-outline-light text-dark my-3\" name=\"add\" style=\"font-size: 15px; height: 40px; width: 110px; margin-left: 70px; border-radius: 0; \" >Add to Bag <i class=\"fas fa-shopping-bag\"></i> </button>
          </div>
        </div>
      </form>
    </div>
  ";
  echo $element;
}

?>
