@extends('Layouts.app')

@section('title') Thank You @endsection

@section('content')

<section class="section confirmation">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
          <div class="confirmation-content text-center">
            <i class="icofont-check-circled text-lg text-color-2"></i>
              <h2 class="mt-3 mb-4">Thank you for your Appoinment</h2>
              <p>We will contact with you soon.</p>
          </div>
          <div>
            <table style="width: 100%; height: 100%;">
              <tr>
                <td align ="center" valign="middle">
                  <a class="btn btn-main btn-round-full" href="{{route('home.index')}}" >continue</a>
                </td>
              </tr>
            </table>
          </div>
      </div>
    </div>
  </div>
</section>

@endsection