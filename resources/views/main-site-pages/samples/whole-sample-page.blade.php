<!DOCTYPE HTML5>
<html lang="en">
<head>
<title>{!! html_entity_decode($sampleData->page_title_tag) !!}</title>

<meta name="description" content="Best Assignment Experts | Best Writing Services | {!! html_entity_decode($sampleData->page_meta_tag) !!}">

@include('layout.header')
<style type="text/css">
  body {   
    font-family: 'Raleway'!important;
    font-size: 15px;
    text-align: justify !important; 
}
h1,h2,h3, p, span { 
    font-family: 'Raleway'!important;
    font-size: 15px;
    text-align: justify !important; 
	
}

.banner-offer .banner-text h2 {
    font-size: 35px;
    font-weight: 700 !important;
    color: #fff !important;
    line-height: 1 !important;
}
.banner-offer .banner-text:first-child h2 {
    font-weight: 500 !important;
}
</style>
  <div class="page-content container clear-fix">
    <div class="grid-col-row">      
      <div class="grid-col grid-col-9">
      <a class="cws-button border-radius alt" href="/samples" style="margin:0px;">Back to Samples</a><br><br>
        <main>                                    
          <section class="clear-fix">                                            
            <h1><p class="fs-18"><strong>{!! html_entity_decode($sampleData->title) !!}</strong></p></h1>
            <p>{!! html_entity_decode($sampleData->content) !!}</p>
            </section>
          <hr class="divider-color" />           
        </main>       
      </div>
       @include('layout.services-right-sidebar')
    </div>
  </div>  
@include('layout.footer')