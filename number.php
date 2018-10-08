<h1>JS validasi Number</h1>
<h2>Silahkan Input angka 1 - 10</h2>
<input type="text" id="txNumb">
<button type="button" onclick="">submit</button>

<p id="tampil"></p>

<script type="text/javascript">
  function Ceknumber(){
    var x,tx;

    x=document.getElementsById('txtNumb').value;

    if (isNaN(x) || x<1) {
        tx = "Input Tidak Sesuai";
    }else {
      tx = "input tidak sesuai [ok]";
    }
    document.getElementsByid('tampil').innerHtml = tx;
  }
