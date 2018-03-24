@extends('layouts.admin')

@section('main-content')
<section class="content">
  <div class="row">
    <div class="col-md-6">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Настройки</h3>
        </div>
        <form method="post" action="{{ route('settings') }}" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="box-body">
            <div class="form-group">
              <label for="first_block_text">First block text</label>
              <textarea class="form-control" placeholder="first block text"
                        type="text" name="first_block_text">{{ $settings->first_block_text }}</textarea>
            </div>
            <div class="form-group">
              <label for="first_block_text">Second block text</label>
              <textarea class="form-control" placeholder="second block text"
                        type="text" name="second_block_text">{{ $settings->second_block_text }}</textarea>
            </div>
            <div class="form-group">
              <label for="first_block_text">Telephone</label>
              <input class="form-control" placeholder="telephone" type="text"
                      name="tel_num" value="{{ $settings->tel_num }}">
            </div>
            <div class="form-group">
              <label for="first_block_text">Email</label>
              <input class="form-control" placeholder="email" type="email"
                      name="email" value="{{ $settings->email }}">
            </div>
            <div class="form-group">
              <label for="first_block_text">Insta link</label>
              <input class="form-control" placeholder="insta_link" type="text"
                      name="insta_link" value="{{ $settings->insta_link }}">
            </div>
            <div class="form-group">
              <label for="first_block_text">Youtube link</label>
              <input class="form-control" placeholder="youtube_link" type="text"
                      name="youtube_link" value="{{ $settings->youtube_link }}">
            </div>
            <div class="form-group">
              <label for="first_block_text">Facebook link</label>
              <input class="form-control" placeholder="facebook_link" type="text"
                      name="facebook_link" value="{{ $settings->facebook_link }}">
            </div>
          </div>
          <div class="box-footer">
            <button type="reset" class="btn btn-danger pull-left">Отменить</button>
            <button type="submit" class="btn btn-success pull-right">Сохранить</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
@stop
