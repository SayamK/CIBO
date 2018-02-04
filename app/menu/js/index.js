function initCards()  {
    $('.cart-button').click(function()  {
      swal({
    title: "Added to Cart!",
    text: "Dish successfully added to cart!",
    type: "success",
    confirmButtonText: "Ok"
  });
    });

    // $(".card-parent-div").mouseover(function(){

    //   var className = $(this).attr('class');
    //   clNamesplit = className.split(' ');

    //   infobtn = "." + clNamesplit[1] + " .info-button";
    //   cartbtn = "." + clNamesplit[1] + " .cart-button";
    //   // console.log(clNamesplit[1]);

    //   $(infobtn).css({opacity:"1",bottom:"5%"});
    //     setTimeout(function(){
    //       $(cartbtn).css({opacity:"1",bottom:"5%"});
    //     },100);


    // });


    // $(".card-parent-div").mouseout(function(){

    //   $(".info-button").css({opacity:"0",bottom:"-15%"});
    //     setTimeout(function(){
    //       $(".cart-button").css({opacity:"0",bottom:"-15%"});
    //     },100);


    // });

    $(".filter").click(function() {
      var idName = "#" + $(this).html();
       $(this).toggleClass("filter-selected");
       $(".filter").not(this).removeClass("filter-selected");


    });

  }


var jsonData;
var currentFilter="all";
var search ="",prevSearch="";
var quantity=[];
var curTotal = 0;
    function strToNum(str, x)  {
      return parseInt(str.substring(x));
    }

		function getHTML(data,i)	{
			var img = "http://sayamkanwar.me/cibo/adminpanel/images/"+data.image;
			var styleImg = "background-image: url('"+img+"');";
			return "<div id = \"id"+data.id+"\" class= \"card-top-wrapper\"><div class = \"card-wrapper\"><div class = \"card-parent-div cardno-"+i+"\"><div class = \"card-upper\"><div class = \"card-image-overlay cart-button\" id=\"idx"+i+"\" ><div class=\"centered\">  <img src=\"http://sayamkanwar.me/cibo/app/cart.png\" class=\"cart-buttonx\" id=\"idx"+i+"\"></div></div><div class = \"card-img\" style=\""+styleImg+"\"></div></div><div class = \"card-lower\"><div class = \"card-lower-name\">"+data.name+"</div><div class = \"card-lower-detail\">"+data.details+"</div><div class = \"card-lower-price\">&#8377;&nbsp;"+data.price+"</div></div></div></div></div>";
    }

    function getHTML2(data, i)  {
      return  "<tr class=\"dish-row dish-row-hidden\" id=\"mainid"+i+"\">"
      +"<td class=\"dish-name\">"+data.name+"</td>"
      +"<input type=\"hidden\" value=\""+data.name+"\" name=\"dishname\"> "
      +"<td style=\"margin-left: 100px;\"><input class=\"dish-quantity\" id=\"dishid"+i+"\" type=\"text\" name=\"dishquantity\" value=\"0\"></td> "
      +"<td class=\"dish-price\" style=\"width:80px;\">₹ "+data.price+"</td>"
      +"<td class=\"remove\" id=\"removeid"+i+"\" style=\"margin-left: 10px;\">x</td>"
     +"</tr>";
    }

    function totalRefresh() {
      var sum=0;
      for(var i=0;i<jsonData.length;i++)  {
        sum+=quantity[i]*jsonData[i].price;
      }
      if(sum!=curTotal) {
        curTotal=sum;
        $(".total-price").text("₹ "+curTotal);
      }
    }

    function initCart() {
        $(".cart-button").click(function()  {
          var elem=$(this);
          var id = $(this).attr('id');
          id = strToNum(id,3);
          quantity[id]++;
          totalRefresh();
          $("#dishid"+id).val(quantity[id]);

          var row= $("#mainid"+id);
          if(row.hasClass("dish-row-hidden")) {
            row.removeClass("dish-row-hidden");
          }
          
          
        });
        $(".dish-quantity").bind("propertychange change click keyup input paste", function(event){
            var elem = $(this);
            var str = elem.val();
            var isnum = /^\d+$/.test(str);
            console.log(str);
            var id = $(this).attr("id");
            id = strToNum(id,6);
            if(str=="") {

            }
            else if(isnum==false)  {
              elem.val(quantity[id]);
            }
            else  {
              str = parseInt(str);
              quantity[id]=str;
              totalRefresh();
              // if(quantity[id]==0) {
              //     var row= $("#mainid"+id);
              //     if(!row.hasClass("dish-row-hidden")) {
              //         row.addClass("dish-row-hidden");
              //      }
              // }
            }

        });

        $(".remove").click(function() {
          var elem = $(this);
          var id = $(this).attr("id");
          id = strToNum(id,8);
          quantity[id]=0;
          totalRefresh();
           var row= $("#mainid"+id);
          if(!row.hasClass("dish-row-hidden")) {
              row.addClass("dish-row-hidden");
           }
        });

    }

		function prep(data)	{
			console.log(data.length);
			console.log(data[0]);
			var htm="";
      var htm2="";
			for(var i=0;i<data.length;i++)	{
				htm+=getHTML(data[i],i);
        quantity[i]=0;
        htm2+=getHTML2(data[i],i);
			}
			$(".grid-wrapper").html(htm);
      $(".dish-table").html(htm2);
			initCards();
      initCart();
			$(".upper-wrapper").hide();
		}

		function gridRefresh()	{
			console.log(currentFilter);
			for(var i=0;i<jsonData.length;i++)	{
				$f= $("#id"+jsonData[i].id);
				if((currentFilter=="all" || currentFilter==(jsonData[i].category).toLowerCase()) && processString(jsonData[i].name).includes(search)) 	{
					if($f.hasClass("card-top-wrapper-hidden"))	{
						$f.removeClass("card-top-wrapper-hidden");
					}
				}
				else	{
					if(!$f.hasClass("card-top-wrapper-hidden"))	{
						$f.addClass("card-top-wrapper-hidden");
					}
				}
			}
		}

		function processString(str)	{
			return str.replace(/\s/g,'').toLowerCase();
		}

		function initFilters()	{
			$("#filter-all").click(function()	{
				currentFilter="all";			gridRefresh();

			});
			$("#filter-mughlai").click(function()	{
				currentFilter="mughlai";			gridRefresh();

			});
			$("#filter-continental").click(function()	{
				currentFilter="continental";			gridRefresh();

			});
			$("#filter-italian").click(function()	{
				currentFilter="italian";			gridRefresh();

			});

			$("#filter-chinese").click(function()	{
				currentFilter="chinese";			gridRefresh();

			});
			$("#filter-beverages").click(function()	{
				currentFilter="beverages";			gridRefresh();

			});
			$("#filter-desserts").click(function()	{
				currentFilter="desserts";
							gridRefresh();

			});
			$("#filter-others").click(function()	{
				currentFilter="others";
							gridRefresh();

			});

		}

		function initSearch()	{
			var elem = $(".right-searchbox");



   // Look for changes in the value
   			elem.bind("propertychange change click keyup input paste", function(event){
				search = elem.val();
				search = processString(search);
				// console.log(search);
				if(prevSearch!=search)	{
				prevSearch=search;
				gridRefresh();
				}
   			});


		}


		$(document).ready(function()	{

      $('form').on('keyup keypress', function(e) {
  var keyCode = e.keyCode || e.which;
  if (keyCode === 13) { 
    e.preventDefault();
    return false;
  }
});


			initSearch();
			initFilters();
			$.ajax({
			 url:"http://sayamkanwar.me/cibo/adminpanel/scripts/getDishData.php",
			 dataType: 'jsonp', // Notice! JSONP <-- P (lowercase)
			 success:function(json){
			     console.log(json);
			     jsonData=json;
			     prep(json);
			 },
			 error:function(){
				 alert("Internet Error");
			 }
			});
		});
