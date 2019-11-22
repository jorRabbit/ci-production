<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Flashdata extends CI_Model
{

     public function successFlash()
     {
          $isi = '<div class="alert alert-success" role="alert"><i class="fa fa-check"></i> Berhasil di Proses <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
          return $isi;
     }

     public function failedFlash()
     {
          $isi = '<div class="alert alert-danger" role="alert"><i class="fa fa-close"></i> Gagal di Proses...!! <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
          return $isi;
     }

     public function readyapproveFlash()
     {
          $isi = '<div class="alert alert-danger" role="alert"><i class="fa fa-close"></i> Failed: Data has ben Approve <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
          return $isi;
     }

     public function custfailedFlash()
     {
          $isi = '<div class="alert col-md-10 col-sm-10" role="alert"> <img src="' . base_url() . 'assets/img/logo/failed.png" width="25" heigth="25"> &emsp; Gagal di Proses...!! <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
          return $isi;
     }

     public function dataDoubleFlash()
     {
          $isi = '<div class="alert alert-danger" role="alert"><i class="fa fa-close"></i> Data Double/Sudah ada...!! <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
          return $isi;
     }

     public function dataUsedFlash()
     {
          $isi = '<div class="alert alert-danger" role="alert"><i class="fa fa-close"></i> Data Sedang Digunakan...!! <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
          return $isi;
     }

     public function noAksesFlash()
     {
          $isi = '<div class="alert alert-danger" role="alert"><i class="fa fa-close"></i> Akses Terbatas...!! <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
          return $isi;
     }

     public function emailSuccessFlash()
     {
          $isi = '<div class="alert alert-success" role="alert"><i class="fa fa-check"></i>Data Berhasil Terkirim.. <br/><small><i>Note: Cek inbox email anda yang terdaftar untuk melihat pengajuan, jika anda tidak menerima email, pilih edit pengajuan dan pilih Re-Email, atau bisa dengan mengklik ulang tombol Send </i></small><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
          return $isi;
     }

     public function emailFailedFlash()
     {
          $isi = '<div class="alert alert-danger" role="alert"><i class="fa fa-close"></i> Gagal dikirim...!! Masuk ke halaman Edit Izin dan Klik Re-Email...!!!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
          return $isi;
     }

     public function ktpfailedFlash()
     {
          $isi = '<div class="alert alert-danger" role="alert"><i class="fa fa-close"></i> <small>KTP/Email tidak sesuai...!!</small> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
          return $isi;
     }

     public function paxfailedFlash()
     {
          $isi = '<div class="alert alert-danger" role="alert"><i class="fa fa-close"></i> <small>Tour Sudah Terdaftar...!!</small> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
          return $isi;
     }
}
