@extends('layout')

@section('content')
<div class="container partners" style="margin-top: 80px">
    <h2 class='partnersHeader'>Партнеры</h2>
    <div  id="myCarousel" class="carousel slide myCarousel" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active partner-slider-1">
                <div class="container">
                </div>
            </div>
            <div class="carousel-item partner-slider-2">
                <div class="container">
                </div>
            </div>
            <div class="carousel-item partner-slider-3">
                <div class="container">
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <ol class='pDescription'>
        <li>ФГБНУ «ФНЦИРИП им. М.П. Чумакова РАН»</li>
        <li>ФГБНУ «НИИ фармакологии имени В.В. Закусова»</li>
        <li>ООО НБЦ «Фармбиомед»</li>
        <li>ФГБУ «НИИ гриппа» Минздрава России</li>
        <li>ФГБОУ ВО СПХФУ Минздрава России</li>
        <li>ФГБНУ «НИИНА»</li>
        <li>ООО «Олфарм»</li>
        <li>АО «ВНЦ БАВ»</li>
        <li>ООО «ФАРМИНТЕРПРАЙСЕЗ»</li>
        <li>ФГБУ «ЦККЛСиМИ»</li>
        <li>ФГБУ «НЦЭСМП» Минздрава России</li>
        <li>НИЦ «Курчатовский институт» - ГосНИИгенетика</li>
        <li>ООО «НПО Петровакс Фарм»</li>
        <li>ФГБОУ ВО НижГМА Минздрава России</li>
        <li>ФГБНУ НИИВС им.И.И.Мечникова</li>
        <li>ООО ИЦ «ФАРМОБОРОНА»</li>
        <li>ФГУП «НИИПА»</li>
        <li>ФГБОУ ВО «ПИМУ» Минздрава России</li>
        <li>ФГБОУ ВО МГМСУ им. А.И. Евдокимова Минздрава России</li>
        <li>АО «БИОХИМИК»</li>
        <li>ФГБУ «ГНИИИ ВМ» МО РФ</li>
        <li>Филиал «Медгамал» ФГБУ «ФНИЦЭМ им. Н.Ф. Гамалеи» Минздрава России</li>
        <li>ООО «НИИ ХимРар»</li>
        <li>ФГБУ «ПФМИЦ» Минздрава России</li>
        <li>АНО «Центр КЭБМИ»</li>
        <li>ФБУН «ФНЦГ им. Ф.Ф. Эрисмана» Роспотребнадзора</li>
        <li>ООО «Лаборатория Инноваций»</li>
        <li>ООО «АльКонди»</li>
        <li>ООО «НПЦ Пробиотек»</li>
        <li>ФГКУ «12 ЦНИИ» Минобороны России</li>
        <li>АО «НПО «Микроген»</li>
        <li>ФГУП «Московский эндокринный завод»</li>
        <li>ФГБУН ИТ ФМБА России</li>
        <li>ООО «Гурус Биофарм»</li>
        <li>ООО «Ир-Органик»</li>
        <li>ООО НПФ «Элест» </li>
 </ol>
</div>
@endsection('content')