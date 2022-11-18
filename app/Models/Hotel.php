<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;

    protected $fillable = ['hotel_name', 'general', 'position', 'accommodation', 'service', 'content', 'beach', 'sports_fun', 'notice', 'url'];

    public function b2cTemplate() {
    	return '
    	<style>
		    .hotel-description {
		        max-width: 1220px;
		        column-count: 2;
		        margin: 0 auto;
		        margin-top: 30px;
		        column-gap: 30px;
		    }
		    
		    .hotel-description__group {
		        list-style: none !important;
		        padding: 0;
		        margin:0;
		    }
		    
		    .hotel-description__item {
		        padding: 0;
		        background-color: white;
		        box-shadow: 0 0 10px 0 rgba(0,0,0,.15);
		        padding: 30px;
		    }
		    
		    .hotel-description__item.important {
		        background: #fffae0;
		        border: 1px solid #edd555;
		    }
		    
		    .hotel-description__item:not(:last-child) {
		        padding-bottom: 30px;
		        margin-bottom: 10px;
		    }
		    
		    .hotel-description__subtitle {
		        color: #243c80;
		        font-size: 1.4375em;
		        padding: 0;
		        margin: 0 0 10px 40px !important;
		        /* text-align: center; */
		        position: relative;
		    }
		    
		    .hotel-description__subtitle.icon.icon--alert {
		        color: #edd555;
		    }
		    
		    .hotel-description__subtitle::before {
		        content: "";
		        position: absolute;
		        width: 30px;
		        height: 30px;
		        background: #243c80;
		        margin-left: -40px !important;
		        
		        -webkit-mask-size: 30px;
		        -webkit-mask-repeat: no-repeat;
		    }
		    
		    .icon.icon--location.hotel-description__subtitle::before {-webkit-mask-image: url("https://cms.fibula.com.mk/b2cDocuments/MK/HTML/2021/Hotel Descriptions/location.svg");}
		    .icon.icon--hotel.hotel-description__subtitle::before {-webkit-mask-image: url("https://cms.fibula.com.mk/b2cDocuments/MK/HTML/2021/Hotel Descriptions/bed.svg");}
		    .icon.icon--service.hotel-description__subtitle::before {-webkit-mask-image: url("https://cms.fibula.com.mk/b2cDocuments/MK/HTML/2021/Hotel Descriptions/service.svg");}
		    .icon.icon--features.hotel-description__subtitle::before {-webkit-mask-image: url("https://cms.fibula.com.mk/b2cDocuments/MK/HTML/2021/Hotel Descriptions/features.svg");}
		    .icon.icon--beach.hotel-description__subtitle::before {-webkit-mask-image: url("https://cms.fibula.com.mk/b2cDocuments/MK/HTML/2021/Hotel Descriptions/beach.svg");}
		    .icon.icon--sport.hotel-description__subtitle::before {-webkit-mask-image: url("https://cms.fibula.com.mk/b2cDocuments/MK/HTML/2021/Hotel Descriptions/sport.svg");}
		    .icon.icon--alert.hotel-description__subtitle::before {-webkit-mask-image: url("https://cms.fibula.com.mk/b2cDocuments/MK/HTML/2021/Hotel Descriptions/alert.svg"); background-color: #edd555;}
		    
		    .hotel-description__text {
		        color: #333;
		        font-size: 1em;
		        margin: 0;
		        padding: 0;
		        line-height: 1.5;
		    }
		    
		    .hotel-description__text li {
		        list-style: none;
		    }
		    
		    .hotel-description__text li:not(:last-child) {
		        margin-bottom: .5rem;
		    }
		    
		    ul.hotel-description__text {
		        margin: 15px 0;
		    }
		    
		    .hotel-description__button {
		        background-color: white;
		        width: 100%;
		        text-decoration: none;
		        border: 2px solid #ff8f26;
		        display: block;
		        border-radius: 4px;
		        color: #ff8f26 !important;
		        text-align: center;
		        font-size: 1.125rem;
		        font-weight: 700 !important;
		        min-height: 50px;
		        display: flex;
		        align-items: center;
		        justify-content: center;
		        transition: all .15s ease-out;
		        text-transform: uppercase;
		    }
		    
		    .hotel-description__button span {
		        text-decoration: none !important;
		    }
		    
		    .hotel-description__button:hover {
		        background-color: #fff9f4;
		        text-decoration: none !important;
		    }
		    
		    @media only screen and (max-width: 800px) {
		        .hotel-description {
		            column-count: 1;
		        }
		    }
		</style>
		<p><b>'. $this->hotel_name .'</b> '. $this->general .'</p>
		<div class="hotel-description">
    		<ul class="hotel-description__group">
		        <li class="hotel-description__item">
		            <h3 class="hotel-description__subtitle icon icon--location">Položaj</h3>
		            <p class="hotel-description__text">
		                '. $this->position .'
		            </p>
		        </li>  
		        <li class="hotel-description__item">
		            <h3 class="hotel-description__subtitle icon icon--hotel">Smještaj</h3>
		            <p class="hotel-description__text">
		                '. $this->accommodation .'  
		            </p>
		        </li>
		        <li class="hotel-description__item">
		            <h3 class="hotel-description__subtitle icon icon--service">Usluga</h3>
		            <p class="hotel-description__text">
		               '. $this->service .'
		            </p>
		        </li>
		        <li class="hotel-description__item">
		            <h3 class="hotel-description__subtitle icon icon--features">Sadržaj</h3>
		            <p class="hotel-description__text">
		              '. $this->content .'
		            </p>
		        </li>
		        <li class="hotel-description__item">
		            <h3 class="hotel-description__subtitle icon icon--beach">Plaža</h3>
		            <p class="hotel-description__text">
		              '. $this->beach .' 
		            </p>
		        </li>
		        <li class="hotel-description__item">
		            <h3 class="hotel-description__subtitle icon icon--sport">Sport i zabava</h3>
		            <p class="hotel-description__text">
		              '. $this->sports_fun .'
		            </p>
		        </li>
		        
		        <li class="hotel-description__item important">
		            <h3 class="hotel-description__subtitle icon icon--alert">Napomena</h3>
		            <p class="hotel-description__text">
		              '. $this->notice .'
		            </p>
		        </li>
		        <a class="hotel-description__button" href="'. $this->url .'" target="_blank">
		            <span>Web stranica hotela</span>
		        </a>
    		</ul>
		</div>
    	';
    }

    public function b2bTemplate() {
    	return '
    	<p><b>'. $this->hotel_name .'</b> '. $this->general .'</p>
    	<ul>
    		<li>
    		<h3>Položaj</h3>
    		<p>'. $this->position .'</p>
    		</li>
    		<li>
    		<h3>Smještaj</h3>
    		<p>'. $this->accommodation .'</p>
    		</li>
    		<li>
    		<h3>Usluga</h3>
    		<p>'. $this->service .'</p>
    		</li>
    		<li>
    		<h3>Sadržaj</h3>
    		<p>'. $this->content .'</p>
    		</li>
    		<li>
    		<h3>Plaža</h3>
    		<p>'. $this->beach .'</p>
    		</li>
    		<li>
    		<h3>Sport i zabava</h3>
    		<p>'. $this->sports_fun .'</p>
    		</li>
    		<li>
    		<h3>Napomena</h3>
    		<p>'. $this->notice .'</p>
    		</li>
    	</ul>
    	<a href="'. $this->url .'" target="_blank">Web stranica hotela</a>
    	';
    }
}
