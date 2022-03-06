$(document).ready(

    function(){
        //sticky nav
        $('.app-container').waypoint(
            function(direction){
                if(direction== "down"){
                    $('header').addClass('sticky');
                }
                else{
                    $('header').removeClass('sticky');
                }
            },{
                offset: '730px'
            }
        )
        

        //Slider
        const imgPosition = document.querySelectorAll(".aspect-ratio-169 img")
        const imgContainer = document.querySelector(".aspect-ratio-169")
        let index = 0
        let imgNumber = imgPosition.length
        const dotItem = document.querySelectorAll(".dot")
        //console.log(imgPosition)
        //abc
        imgPosition.forEach(function(image, index){
            image.style.left = index*100 + "%"
            dotItem[index].addEventListener("click",function(){
            slider(index)    
            })
        })

        function imgSlide(){
            index++;
            if(index>=imgNumber){
                index = 0
            }
            slider(index)
        }   

        function slider(index){
            imgContainer.style.left = "-" +index*100+ "%"
            const dotActive = document.querySelector(".active")
            dotActive.classList.remove("active")
            dotItem[index].classList.add("active")
        }
        setInterval(imgSlide,5000)

        const itemSliderbar = document.querySelectorAll(".category-left-li")
        itemSliderbar.forEach(function(menu,index){
            menu.addEventListener("click",function(){
                menu.classList.toggle("block")
            })
            
        })

        //Product
        const bigImg = document.querySelector(".product-content-left-big-img img")
        const smallImg = document.querySelectorAll(".product-content-left-small-img img")
        smallImg.forEach(function(imgItem,X){
            imgItem.addEventListener("click",function(){
                bigImg.src = imgItem.src
            })
        })

        const baoquan = document.querySelector(".baoquan")
        const chitiet = document.querySelector(".chitiet")

        if(baoquan){
            baoquan.addEventListener("click",function(){
                document.querySelector(".product-content-right-bottom-top-content-chitiet").style.display = "none"
                document.querySelector(".product-content-right-bottom-top-content-baoquan").style.display = "block"
            })
        }

        if(chitiet){
            chitiet.addEventListener("click",function(){
                document.querySelector(".product-content-right-bottom-top-content-baoquan").style.display = "none"
                document.querySelector(".product-content-right-bottom-top-content-chitiet").style.display = "block"
            })
        }

        const btn = document.querySelector(".product-content-right-bottom-top")
        if(btn){
            btn.addEventListener("click", function(){
                document.querySelector(".product-content-right-bottom-top-content-big").classList.toggle("activeB")
            })
        }
    }

)