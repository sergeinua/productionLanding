@extends('layouts.admin')

@section('main-content')
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Сообщения</h3>
                    </div>
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover">
                            <tr>
                                <th>Дата</th>
                                <th>Имя</th>
                                <th>Номер телефона</th>
                                <th>Email</th>
                            </tr>
                            @foreach ($messages as $message)
                                <tr onclick="showDetails(<?= $message->id ?>)"
                                  class={{ $message->read ? '' : 'msg-unread' }}>
                                    <td>{{$message->created_at}}</td>
                                    <td>{{$message->name ? $message->name : '-'}}</td>
                                    <td>{{$message->telephone ? $message->telephone : '-'}}</td>
                                    <td>{{$message->email ? $message->email : '-'}}</td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="modal fade bs-example-modal-md" id="dataModal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4>Детали сообщения</h4>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-2">
                                <label>Received:</label>
                            </div>
                            <div class="col-xs-10">
                              <input id="modalCreatedAt" type="text" disabled>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-2">
                                <label>Name:</label>
                            </div>
                            <div class="col-xs-10">
                              <input id="modalName" type="text" disabled>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-2">
                                <label>Email:</label>
                            </div>
                            <div class="col-xs-10">
                              <input id="modalEmail" type="text" disabled>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-2">
                                <label>Tel:</label>
                            </div>
                            <div class="col-xs-10">
                              <input id="modalTel" type="text" disabled>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-2">
                                <label>Type:</label>
                            </div>
                            <div class="col-xs-10">
                              <input id="modalType" type="text" disabled>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-2">
                                <label>Duration:</label>
                            </div>
                            <div class="col-xs-10">
                              <input id="modalDuration" type="text" disabled>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" onclick="closeModal()">Закрыть</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        function showDetails(messageId) {
            fetch('/api/message/' + messageId).then(function (resp) {
                return resp.json();
            }).then(function (resp) {
                $('#modalCreatedAt').val(resp.created_at);
                $('#modalName').val(resp.name);
                $('#modalEmail').val(resp.email);
                $('#modalTel').val(resp.telephone);
                $('#modalType').val(resp.type);
                $('#modalDuration').val(resp.duration);
                $('#dataModal').modal('show');
            });
        }
        function closeModal() {
            $('#dataModal').modal('hide');
            $('#modalCreatedAt').val('');
            $('#modalName').val('');
            $('#modalEmail').val('');
            $('#modalTel').val('');
            $('#modalType').val('');
            $('#modalDuration').val('');
        }
    </script>
@stop
