@extends('layouts.admin')

@section('main-content')
<section class="content">
    <div class="row">
        <div class="col-xs-12">
          <div class="col-md-6">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Настройки</h3>
            </div>
            <form method="post" action="{{ route('settings') }}" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label for="first_block_text">first block text</label>
                  <textarea class="form-control" placeholder="first block text"
                            type="text" name="first_block_text"></textarea>
                </div>
              </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-primary pull-right">Сохранить</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
</section>
@stop
