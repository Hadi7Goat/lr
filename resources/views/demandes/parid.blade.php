@extends('layouts.admin')

@section('content')

    <!-- Content wrapper -->
    <div class="content-wrapper">
      <!-- Content -->

      <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Demandes /</span>  Id : {{$demande->id}}</h4>

        <div class="card">
            <!-- Notifications -->
            {{-- <h5 class="card-header">Recent Devices</h5>
            <div class="card-body">
              <span
                >We need permission from your browser to show notifications.
                <span class="notificationRequest"><strong>Request Permission</strong></span></span
              >
              <div class="error"></div>
            </div> --}}
            <div class="col-lg-12">

                <div class="demo-inline-spacing mt-3">
                  <ul class="list-group  px-4" dir="rtl">

          <li class="list-group-item d-flex align-items-center"><i class="bx bx-purchase-tag-alt ms-4"></i><div class="d-flex align-items-center mb-2"> <b class="ms-3">  نوع الخدمة : </b>  <p class="pb-0 mb-0">  {{$demande->service == 1 ? 'ماكثة في البيت' : ''}} {{$demande->service == 2 ? 'شركة ناشئة' : ''}} {{$demande->service == 3 ? 'حرفي وتاجر' : ''}} </p></div></li>
          <li class="list-group-item d-flex align-items-center"><i class="bx bx-purchase-tag-alt ms-4"></i><div class="d-flex align-items-center mb-2"> <b class="ms-3"> الحالة المدنية : </b>  <p class="pb-0 mb-0">  {{$demande->civilite}} </p></div></li>
          <li class="list-group-item d-flex align-items-center"><i class="bx bx-purchase-tag-alt ms-4"></i><div class="d-flex align-items-center mb-2"> <b class="ms-3"> الإسم : </b>  <p class="pb-0 mb-0">  {{$demande->nom}} </p></div></li>
          <li class="list-group-item d-flex align-items-center"><i class="bx bx-purchase-tag-alt ms-4"></i><div class="d-flex align-items-center mb-2"> <b class="ms-3"> اللقب : </b>  <p class="pb-0 mb-0">  {{$demande->prenom}} </p></div></li>
          <li class="list-group-item d-flex align-items-center"><i class="bx bx-purchase-tag-alt ms-4"></i><div class="d-flex align-items-center mb-2"> <b class="ms-3">  إسم الأب : </b>  <p class="pb-0 mb-0">  {{$demande->prenom_pere}} </p></div></li>
          <li class="list-group-item d-flex align-items-center"><i class="bx bx-purchase-tag-alt ms-4"></i><div class="d-flex align-items-center mb-2"> <b class="ms-3">  إسم الأم : </b>  <p class="pb-0 mb-0">  {{$demande->nom_mere}} </p></div></li>
          <li class="list-group-item d-flex align-items-center"><i class="bx bx-purchase-tag-alt ms-4"></i><div class="d-flex align-items-center mb-2"> <b class="ms-3"> لقب الأم : </b>  <p class="pb-0 mb-0">  {{$demande->prenom_mere}} </p></div></li>
          <li class="list-group-item d-flex align-items-center"><i class="bx bx-purchase-tag-alt ms-4"></i><div class="d-flex align-items-center mb-2"> <b class="ms-3"> تاريخ الميلاد : </b>  <p class="pb-0 mb-0">  {{$demande->date_naissance}} </p></div></li>
          <li class="list-group-item d-flex align-items-center"><i class="bx bx-purchase-tag-alt ms-4"></i><div class="d-flex align-items-center mb-2"> <b class="ms-3"> ولاية الميلاد : </b>  <p class="pb-0 mb-0">  {{$demande->wilaya_naissance}} </p></div></li>
          <li class="list-group-item d-flex align-items-center"><i class="bx bx-purchase-tag-alt ms-4"></i><div class="d-flex align-items-center mb-2"> <b class="ms-3"> بلدية الميلاد : </b>  <p class="pb-0 mb-0">  {{$demande->communen_naissance}} </p></div></li>
          <li class="list-group-item d-flex align-items-center"><i class="bx bx-purchase-tag-alt ms-4"></i><div class="d-flex align-items-center mb-2"> <b class="ms-3"> رقم شهادة الميلاد : </b>  <p class="pb-0 mb-0">  {{$demande->num_act_naissance}} </p></div></li>
          <li class="list-group-item d-flex align-items-center"><i class="bx bx-purchase-tag-alt ms-4"></i><div class="d-flex align-items-center mb-2"> <b class="ms-3"> نمط شهادة الميلاد : </b>  <p class="pb-0 mb-0">  {{$demande->type_act_naissance}} </p></div></li>
          <li class="list-group-item d-flex align-items-center"><i class="bx bx-purchase-tag-alt ms-4"></i><div class="d-flex align-items-center mb-2"> <b class="ms-3">  الحالة العائلية :  </b>  <p class="pb-0 mb-0">  {{$demande->situation_familiale}} </p></div></li>
          <li class="list-group-item d-flex align-items-center"><i class="bx bx-purchase-tag-alt ms-4"></i><div class="d-flex align-items-center mb-2"> <b class="ms-3">  المستوى الدراسي :  </b>  <p class="pb-0 mb-0">  {{$demande->niveau_dinstructions}} </p></div></li>
          <li class="list-group-item d-flex align-items-center"><i class="bx bx-purchase-tag-alt ms-4"></i><div class="d-flex align-items-center mb-2"> <b class="ms-3">  عدد الأطفال :  </b>  <p class="pb-0 mb-0">  {{$demande->numbre_enfants}} </p></div></li>
          <li class="list-group-item d-flex align-items-center"><i class="bx bx-purchase-tag-alt ms-4"></i><div class="d-flex align-items-center mb-2"> <b class="ms-3">   عدد المعالين الأخرين :  </b>  <p class="pb-0 mb-0">  {{$demande->numbre_personnes}} </p></div></li>
          <li class="list-group-item d-flex align-items-center"><i class="bx bx-purchase-tag-alt ms-4"></i><div class="d-flex align-items-center mb-2"> <b class="ms-3">   العمر :  </b>  <p class="pb-0 mb-0">  {{$demande->age}} </p></div></li>
          <li class="list-group-item d-flex align-items-center"><i class="bx bx-purchase-tag-alt ms-4"></i><div class="d-flex align-items-center mb-2"> <b class="ms-3">  النشاط الممارس :  </b>  <p class="pb-0 mb-0">  {{$demande->activite}} </p></div></li>
          <li class="list-group-item d-flex align-items-center"><i class="bx bx-purchase-tag-alt ms-4"></i><div class="d-flex align-items-center mb-2"> <b class="ms-3">  مدة التقسيط :  </b>  <p class="pb-0 mb-0">  {{$demande->duree}} </p></div></li>
          <li class="list-group-item d-flex align-items-center"><i class="bx bx-purchase-tag-alt ms-4"></i><div class="d-flex align-items-center mb-2"> <b class="ms-3">   حامل لشهادة :  </b>  <p class="pb-0 mb-0">  {{$demande->certificat}} </p></div></li>
          @if ($demande->certificat == 'oui')
          <li class="list-group-item d-flex align-items-center"><i class="bx bx-purchase-tag-alt ms-4"></i><div class="d-flex align-items-center mb-2"> <b class="ms-3">    نوع الشهادة :  </b>  <p class="pb-0 mb-0">  {{$demande->certificat_type}} </p></div></li>
          @endif
          <li class="list-group-item d-flex align-items-center"><i class="bx bx-purchase-tag-alt ms-4"></i><div class="d-flex align-items-center mb-2"> <b class="ms-3">   لديه خبرة :  </b>  <p class="pb-0 mb-0">  {{$demande->experience}} </p></div></li>


          <li class="list-group-item d-flex align-items-center"><i class="bx bx-purchase-tag-alt ms-4"></i><div class="d-flex align-items-center mb-2"> <b class="ms-3">    الولاية :  </b>  <p class="pb-0 mb-0">  {{$demande->wilaya}} </p></div></li>
          <li class="list-group-item d-flex align-items-center"><i class="bx bx-purchase-tag-alt ms-4"></i><div class="d-flex align-items-center mb-2"> <b class="ms-3">    الدائرة :  </b>  <p class="pb-0 mb-0">  {{$demande->daira}} </p></div></li>
          <li class="list-group-item d-flex align-items-center"><i class="bx bx-purchase-tag-alt ms-4"></i><div class="d-flex align-items-center mb-2"> <b class="ms-3">    البلدية :  </b>  <p class="pb-0 mb-0">  {{$demande->commune}} </p></div></li>
          <li class="list-group-item d-flex align-items-center"><i class="bx bx-purchase-tag-alt ms-4"></i><div class="d-flex align-items-center mb-2"> <b class="ms-3">    الرمز البريدي :  </b>  <p class="pb-0 mb-0">  {{$demande->codepostal}} </p></div></li>

          <li class="list-group-item d-flex align-items-center"><i class="bx bx-purchase-tag-alt ms-4"></i><div class="d-flex align-items-center mb-2"> <b class="ms-3">     العنوان :  </b>  <p class="pb-0 mb-0">  {{$demande->adresse}} </p></div></li>
          <li class="list-group-item d-flex align-items-center"><i class="bx bx-purchase-tag-alt ms-4"></i><div class="d-flex align-items-center mb-2"> <b class="ms-3">     رقم الهاتف :  </b>  <p class="pb-0 mb-0">  {{$demande->mobile}} </p></div></li>
         @if ($demande->mobile2)
         <li class="list-group-item d-flex align-items-center"><i class="bx bx-purchase-tag-alt ms-4"></i><div class="d-flex align-items-center mb-2"> <b class="ms-3">      رقم هاتف إضافي:  </b>  <p class="pb-0 mb-0">  {{$demande->mobile2}} </p></div></li>
         @endif
         <li class="list-group-item d-flex align-items-center"><i class="bx bx-purchase-tag-alt ms-4"></i><div class="d-flex align-items-center mb-2"> <b class="ms-3">      الإيميل :  </b>  <p class="pb-0 mb-0">  {{$demande->email}} </p></div></li>
         <li class="list-group-item d-flex align-items-center"><i class="bx bx-purchase-tag-alt ms-4"></i><div class="d-flex align-items-center mb-2"> <b class="ms-3">     NIN (رقم الهوية الوطنية) :  </b>  <p class="pb-0 mb-0">  {{$demande->nin}} </p></div></li>
         <li class="list-group-item d-flex align-items-center"><i class="bx bx-purchase-tag-alt ms-4"></i><div class="d-flex align-items-center mb-2"> <b class="ms-3">     رقم بطاقة التعريف الوطنية :  </b>  <p class="pb-0 mb-0">  {{$demande->piece_identite_num}} </p></div></li>
         <li class="list-group-item d-flex align-items-center"><i class="bx bx-purchase-tag-alt ms-4"></i><div class="d-flex align-items-center mb-2"> <b class="ms-3">     تاريخ إصدار بطاقة التعريف الوطنية :  </b>  <p class="pb-0 mb-0">  {{$demande->piece_identite_date}} </p></div></li>
         <li class="list-group-item d-flex align-items-center"><i class="bx bx-purchase-tag-alt ms-4"></i><div class="d-flex align-items-center mb-2"> <b class="ms-3">     ولاية إصدار بطاقة التعريف الوطنية :  </b>  <p class="pb-0 mb-0">  {{$demande->piece_identite_wilaya}} </p></div></li>
         <li class="list-group-item d-flex align-items-center"><i class="bx bx-purchase-tag-alt ms-4"></i><div class="d-flex align-items-center mb-2"> <b class="ms-3">     بلدية إصدار بطاقة التعريف الوطنية :  </b>  <p class="pb-0 mb-0">  {{$demande->piece_identite_commune}} </p></div></li>

         <li class="list-group-item d-flex align-items-center"><i class="bx bx-purchase-tag-alt ms-4"></i><div class="d-flex align-items-center mb-2"> <b class="ms-3">      مكان السكن :  </b>  <p class="pb-0 mb-0">  {{$demande->habitation}} </p></div></li>

         <li class="list-group-item d-flex align-items-center"><i class="bx bx-purchase-tag-alt ms-4"></i><div class="d-flex align-items-center mb-2"> <b class="ms-3">      لديه قرض عقاري حالي :  </b>  <p class="pb-0 mb-0">  {{$demande->credit_immobilier}} </p></div></li>
         @if ($demande->credit_immobilier == 'oui')

         <li class="list-group-item d-flex align-items-center"><i class="bx bx-purchase-tag-alt ms-4"></i><div class="d-flex align-items-center mb-2"> <b class="ms-3">      قرض عقاري شهري - دج/للشهر :  </b>  <p dir="ltr" class="pb-0 mb-0">  {{$demande->mensualite_credit_immobilier}} DA </p></div></li>
         <li class="list-group-item d-flex align-items-center"><i class="bx bx-purchase-tag-alt ms-4"></i><div class="d-flex align-items-center mb-2"> <b class="ms-3">      المقرض العقاري :  </b>  <p class="pb-0 mb-0">  {{$demande->organisme_credit_immobilier}} </p></div></li>
         <li class="list-group-item d-flex align-items-center"><i class="bx bx-purchase-tag-alt ms-4"></i><div class="d-flex align-items-center mb-2"> <b class="ms-3">      تاريخ إنتهاء القرض العقاري :  </b>  <p class="pb-0 mb-0">  {{$demande->date_fin_credit_immobilier}} </p></div></li>
         @endif


         <li class="list-group-item d-flex align-items-center"><i class="bx bx-purchase-tag-alt ms-4"></i><div class="d-flex align-items-center mb-2"> <b class="ms-3">     لديه قرض سيارة حالي :   </b>  <p class="pb-0 mb-0">  {{$demande->credit_voiture}} </p></div></li>
         @if ($demande->credit_voiture == 'oui')

         <li class="list-group-item d-flex align-items-center"><i class="bx bx-purchase-tag-alt ms-4"></i><div class="d-flex align-items-center mb-2"> <b class="ms-3">      سداد قرض السيارة شهرياً - دج/للشهر :  </b>  <p dir="ltr" class="pb-0 mb-0">  {{$demande->mensualite_credit_voiture}} DA </p></div></li>
         <li class="list-group-item d-flex align-items-center"><i class="bx bx-purchase-tag-alt ms-4"></i><div class="d-flex align-items-center mb-2"> <b class="ms-3">      مقرض ائتمان السيارة :  </b>  <p class="pb-0 mb-0">  {{$demande->organisme_credit_voiture}} </p></div></li>
         <li class="list-group-item d-flex align-items-center"><i class="bx bx-purchase-tag-alt ms-4"></i><div class="d-flex align-items-center mb-2"> <b class="ms-3">      تاريخ إنتهاء قرض السيارة :  </b>  <p class="pb-0 mb-0">  {{$demande->date_fin_credit_voiture}} </p></div></li>
         @endif


         <li class="list-group-item d-flex align-items-center"><i class="bx bx-purchase-tag-alt ms-4"></i><div class="d-flex align-items-center mb-2"> <b class="ms-3">     لديه قرض جاري آخر ؟ :   </b>  <p class="pb-0 mb-0">  {{$demande->autre_credit}} </p></div></li>
         @if ($demande->autre_credit == 'oui')

         <li class="list-group-item d-flex align-items-center"><i class="bx bx-purchase-tag-alt ms-4"></i><div class="d-flex align-items-center mb-2"> <b class="ms-3">      سداد قرض شهري الأخر - دج/للشهر :  </b>  <p dir="ltr" class="pb-0 mb-0">  {{$demande->mensualite_autre_credit}} DA </p></div></li>
         <li class="list-group-item d-flex align-items-center"><i class="bx bx-purchase-tag-alt ms-4"></i><div class="d-flex align-items-center mb-2"> <b class="ms-3">      مقرض ائتماني آخر:  </b>  <p class="pb-0 mb-0">  {{$demande->organisme_autre_credit}} </p></div></li>
         <li class="list-group-item d-flex align-items-center"><i class="bx bx-purchase-tag-alt ms-4"></i><div class="d-flex align-items-center mb-2"> <b class="ms-3">      تاريخ إنتهاء القرض الآخر :  </b>  <p class="pb-0 mb-0">  {{$demande->date_fin_autre_credit}} </p></div></li>
         @endif

         <li class="list-group-item d-flex align-items-center"><i class="bx bx-purchase-tag-alt ms-4"></i><div class="d-flex align-items-center mb-2"> <b class="ms-3">     لديه إيجار حالي لدفعه؟ :   </b>  <p class="pb-0 mb-0">  {{$demande->loyer}} </p></div></li>
         @if ($demande->loyer == 'oui')
         <li class="list-group-item d-flex align-items-center"><i class="bx bx-purchase-tag-alt ms-4"></i><div class="d-flex align-items-center mb-2"> <b class="ms-3">      مبلغ الإيجار :  </b>  <p dir="ltr" class="pb-0 mb-0">  {{$demande->mensualite_loyer}} DA </p></div></li>
         @endif




                  </ul>
                </div>
              </div>
            {{-- <div class="card-body">
              <h6>When should we send you notifications?</h6>
              <form action="javascript:void(0);">
                <div class="row">
                  <div class="col-sm-6">
                    <select id="sendNotification" class="form-select" name="sendNotification">
                      <option selected>Only when I'm online</option>
                      <option>Anytime</option>
                    </select>
                  </div>
                  <div class="mt-4">
                    <button type="submit" class="btn btn-primary me-2">Save changes</button>
                    <button type="reset" class="btn btn-outline-secondary">Discard</button>
                  </div>
                </div>
              </form>
            </div> --}}
            <!-- /Notifications -->
          </div>

        <!-- Basic Bootstrap Table -->
        <div class="card px-5" dir="rtl" style="font-size: 22px">





        </div>
        <!--/ Basic Bootstrap Table -->

        <hr class="my-5" />






















      </div>
      <!-- / Content -->


      <div class="content-backdrop fade"></div>
    </div>

@endsection
