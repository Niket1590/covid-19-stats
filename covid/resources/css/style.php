<style type="text/css">
@font-face{
    font-family: 'Gilroy';
    src: url(./Gilroy-Regular.woff) format(woff);
}
/* ---------------------------------------------- */
/*                    GENERAL                     */
/* ---------------------------------------------- */
*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: 'Gilroy', sans-serif;
}
html{
    font-size: 16px;
}
.hide{
    display: none;
}
.fadeIn{
    animation: fade 0.5s ease-in-out;
}
@keyframes fade{
    0%{
        opacity: 0;
    }
    100%{
        opacity: 1;
    }
}
/* ---------------------------------------------- */
/*                    HEADER                      */
/* ---------------------------------------------- */
header{
    display: flex;
    align-items: center;
    justify-content: space-between;

    max-width: 1200px;
    width: 100%;
    height: 60px;

    margin: 0 auto;

    background-color: #F3F2F2;
}
/* -------- LOGO -------- */
.logo{
    display: flex;
    align-items: center;
    padding-left: 20px;
}
.logo img{
    width: 60px;
}
.logo p {
    font-weight: bold;
    color: #6a149b;
}
/* -------- NAV -------- */
nav{
    
}

nav ul{
    display: flex;
    align-items: center;
}
nav ul li{
    list-style: none;
}
nav ul li:last-child{
    padding-right: 20px;
}
nav ul li a {
    text-decoration: none;
    color: #6a149b;
    padding: 10px;
}
/* ---------------------------------------------- */
/*                      MAIN                      */
/* ---------------------------------------------- */
main{
    max-width: 1200px;
    margin: 0 auto;
}
/* -------- BG IMAGE -------- */
.stats{
    width: 100%;
    background-image: linear-gradient(rgba(0,0,0,0.9), rgba(0,0,0,0.9)) ,url('../img/bg.jpg');
    background-size: cover;
}
/* -------- LATEST REPORT -------- */
.latest-report{
    display: flex;
    justify-content: space-between;
    align-items: center;

    width: 80%;
    margin: 0 auto;
    padding-top: 50px;

    color: #FFF;
}

.country,
.total-cases,
.recovered,
.deaths{
    height: 100px;
}

.name{
    font-size: 2.2em;
    color: #be64f1;
    font-weight: bold;
}

.change-country{
    cursor: pointer;
}

.title{
    font-size: 1.3em;
}
.total-cases .value{
    font-size: 2em;
    font-weight: bold;
}
.recovered .value{
    font-size: 2em;
    font-weight: bold;
    color: #009688;
}
.deaths .value{
    font-size: 2em;
    font-weight: bold;
    color: #f44336;
}
.new-value{
    font-size: 1.3em;
}
/* -------- CHART -------- */
.chart{
    width: 80%;
    height: 70vh;
    min-height: 500px;

    margin: 0 auto;
    padding: 50px 0;
}
/* -------- SEARCH COUNTRY -------- */
.search-country{
    position: relative;
    top: 10px;
}
.search-box{
    position: absolute;
    
    display: flex;
    align-items: center;
    justify-content: space-between;

    width: 400px;
    height: 30px;

    background-color: #111;

    z-index: 1;
}
.search-box input{
    width: 360px;
    height: 25px;

    border: none;

    background-color: transparent;
    color: #FFF;

    padding-left: 15px;

    font-size: 1.1em;
}
.search-box img{
    width: 20px;
    padding-right: 5px;
    cursor: pointer;
}

.country-list{
    display: flex;

    position: absolute;
    top: 30px;

    width: 400px;
    height: 300px;

    background-color: #111;
    opacity: 0.9;

    overflow-y: scroll;
}

.country-list ul{
    width: 100%;
}

.country-list ul li{
    list-style: none;
    cursor: pointer;
    padding: 10px;
    color: #FFF;
}
.country-list ul li:hover{
    border-left: 1px solid #FFF;
}
/* SCROLL BAR */
.country-list::-webkit-scrollbar {
    width: 10px;
  }
  
  /* Track */
  .country-list::-webkit-scrollbar-track {
    background: #111;
  }
  
  /* Handle */
  .country-list::-webkit-scrollbar-thumb {
    background: #F1F1F1;
  }
  
  /* Handle on hover */
  .country-list::-webkit-scrollbar-thumb:hover {
    background: #FFF;
  }
/* ---------------------------------------------- */
/*                    FOOTER                      */
/* ---------------------------------------------- */
footer{
    max-width: 1200px;
    height: 60px;

    margin: 0 auto;
    background-color: #db1212;
}

.footer-container{
    height: 100%;
    display: flex;
    justify-content: center;
}

.copyright{
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: center;
}

.copyright p{
    color: #FFF;
}
/* ---------------------------------------------- */
/*             SCREEN WIDTH < 600px               */
/* ---------------------------------------------- */
@media screen and (max-width: 600px){
    .latest-report{
        display: flex;
        flex-direction: column;
        align-items: flex-start;
    }
} 
.details{
    display: block;
    padding: 60px;
    text-align: center;
    
}
.row{
  
    display: flex;
    
}
.diag{
    
    padding-left: 20px;
    
}
.content{
    font-family: Garamond, serif;
    font-size:19px;
    padding-right: 13px;
}
.formfiller{
    box-sizing: border-box;
    border:2px rgb(64 ,6 ,119);
    text-align: center;
    font-size: 25px;
    font-weight: 700;
}
.coroform{
    border:2px rgb(64 ,6 ,119);
    
    margin:10px;
    padding: 10px
    magin-left:100px;
    padding-left:200px;
}
.person{
    margin:4px;
    padding: 4px
}.phone{
    margin:4px;
    padding: 4px
}.email{
    margin:4px;
    padding: 4px
}.address{
    margin:4px;
    padding: 4px
}.submit{
    margin:4px;
    padding: 4px
}
}
</style>