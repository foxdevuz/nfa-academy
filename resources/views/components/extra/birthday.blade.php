@props(['birthday'])
<div class="container-fluid service position-relative px-5 mt-5" >
    <div class="item container">
        <div class="col-lg-4 col-md-4 bg-primary">
          <div class="text-center text-white p-5">
            <h4 class="text-uppercase mb-3 text-white">Tavallud Ayom muborak </h4>
            <img class="Happyu_brithday_image py-3" src="/storage/images/{{ $birthday[0]->image }}" alt="">
            <p class="text-white font-weight-bold h5">
              Xurmatli {{ $birthday[0]->name }} biz sizni jamoamiz nomidan tabrilaymiz xar doim yuziz yorug' bolsin
              ishlaringizga omad tilab qolamiz
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
