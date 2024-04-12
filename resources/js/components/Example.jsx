import React, { useEffect, useState } from 'react';
import ReactDOM from 'react-dom/client';
import Slider from "react-slick";
import "slick-carousel/slick/slick.css";
import "slick-carousel/slick/slick-theme.css";

import {ImageHome2} from "./image" ;
let header=[
    {"name" :"Signages" , "type":"Signages"},  
    {"name" :"Stands" , "type":"Displaystands"},  
    {"name" :"Exhibition" , "type":"Exhibition"},  
    {"name" :"branding" , "type":"branding"},  
    {"name" :"photography" , "type":"photography"},  
    {"name" :"Web design" , "type":"Web"} ,  
    {"name" :"Corporate Gifts" , "type":"Gifts"}
   ]

   

function Example({title  ,  header , images}) {
    let origin = images ;
    let [active , setactive] = useState(header[0].type)
    let [data , setdata] = useState(origin)
    let [ImgPreview , setImgPreview] = useState(false)

    var settings = {
        dots: false,
        // infinite: true,
        speed: 4000,
        slidesToScroll: 2,
        arrows: true,
        autoplay: true,
        autoplaySpeed: 4000,
        slidesToShow: 2,
        rows: 2,
        slidesperrow: 2,
        lazyload: true,
        pauseOnHover: false ,
        adaptiveHeight: true,
        afterChange: () => { setactive(document.querySelector('.slick10 .slick-active img').getAttribute("data-cate").split(" ")[0]) }
      };

    const handleHeader = (type)=>{

        setdata( [...origin.filter(e=> e.name.includes(type)) , ...origin.filter(e=> !e.name.includes(type))] )
        setactive(type)
    }

    useEffect(_=>{
        ImgPreview == false ? document.getElementById("example").style.zIndex = 100 : document.getElementById("example").style.zIndex = 10000000000000
    } ,[ImgPreview])

      return (
        
        <div className='slider-all'>        
            <div className="h1">{title}</div>
          {header 
            ? 
            <ul className='header' > 
               { header.map((e,index)=>(
                        <li key={index} onClick={_=>handleHeader(e.type)} className={active == e.type ? 'active' : "" } data-cate="{{ $e['type'] }}"> {e.name} </li>
                ))}
            </ul> 
        :  ""}

        <Slider {...settings} className={"Slider_Slick slick10"}>
    
            {data.map((e,index)=>(
                    <img key={index} onClick={_=>setImgPreview(e.img)} data-cate={e.name}  src={e.img} loading='lazy' />
            )) }
        </Slider>



        { ImgPreview && 
            <div className="preview_img">
                <img src={ImgPreview} alt="" />
                <i className='fa-solid fa-xmark' onClick={_=>setImgPreview(false)}></i>
            </div>}

        </div>
      );
}

export default Example;

if (document.getElementById('example')) {
    const Index = ReactDOM.createRoot(document.getElementById("example"));

    Index.render(
        <React.StrictMode>
            {
                window.location.pathname  == "/en" 
                ? <Example images={ImageHome2} header={header} title="OUR WORKS"  />
                : ""
            }
            
        </React.StrictMode>
    )
}
