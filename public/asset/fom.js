$(document).ready(function(){
    fillSelect();
    refreshPorudctList();  
  });
  
  function addProduct(){
    var productID=$(".productSelect option:selected").val();
    var productNumber = $('#productNumber').val();
    $.each(products, function(index){
      if(this.id == productID && Number(productNumber) > 0){
        products[index].number += Number(productNumber);
      }
    })
    
    refreshPorudctList();
  }
  function fillSelect(){
    var productSelect = $('#productSelect');
    $.each(products, function() {
      productSelect.append($("<option />").val(this.id).text(this.name + ' ('+this.price.toFixed(2)+' EUR)'));
    });
  };
  function getProduct(id){
    $.each(products, function(){
      if(this.id = id){
        return this;
      }
    })
  }
  
  function refreshPorudctList(){
    var orders = $('#orders');
    orders.html('');
    $.each(products, function(){
      if(this.number > 0){
        orders.append('<div class="form-inline orders-order"><input value="' +this.name+ ' ('+this.price.toFixed(2)+' EUR)" disabled class="form-control"><div class="orders-order-actions"><input id="order-'+this.id+'" type="number", class="form-control number", value="'+this.number+'"/><button onclick="setItem('+this.id+')" class="btn">Set</button><button onclick="removeItem('+this.id+')" class="btn btn-warning">Remove</button></div>');
      }
    });
    refreshBill();
  }
  function refreshBill(){
    var bill = 0;
    $.each(products, function(){
       bill += this.number * this.price;
    })
    
    $('#bill').html(bill.toFixed(2));
  }
  
  function setItem(id){
    var newOrder = $('#order-'+id).val();
    $.each(products, function(index){
      if(this.id == id){
        products[index].number = newOrder;
      }
    });
    refreshBill();
  }
  function removeItem(id){
    $.each(products, function(index){
      if(this.id == id){
        products[index].number = 0;
      }
    });
    refreshPorudctList();
  }
  var products = [
    {
     id: 0,
     name: 'Croissant',
     price: 2.00,
     number: 0
    },
    {
      id: 1,
      name: 'Omlette',
      price: 3.00,
      number: 2
    },
    {
      id: 2,
      name: 'Eggs Benedict',
      price: 4.50,
      number: 0
    },
    {
      id: 3,
      name: 'Croque Madame',
      price: 4.10,
      number: 0
    },
    {
      id: 4,
      name: 'English Breakfast',
      price: 6.50,
      number: 0
    },
    {
      id: 5,
      name: 'Toast with Jam',
      price: 2.50,
      number: 0
    }
  ];