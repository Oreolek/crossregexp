jQuery(document).ready(function(){
  jQuery('form').on('submit', function(event){
    document.valid = true;
    $('label').each(function(){
      if (document.valid === false)
      {
        return false;
      }
      if ($(this).text() === '') //skip empty expressions
      {
        return true;
      }
      row = $(this).data('row');
      column = $(this).data('column');
      expr = new RegExp('^'+$(this).text()+'$','i');
      if (row)
      {
        rowvalue = '';
        $('.'+row+' > input').each(function(){
          rowvalue += $(this).val();
        });
        if (expr.test(rowvalue) === false)
        {
          $(this).css('background-color', 'red');
          document.valid = false;
        }
      }
      if (column)
      {
        colvalue = '';
        $('.'+column+' > input').each(function(){
          colvalue += $(this).val();
        });
        if (expr.test(colvalue) === false)
        {
          $(this).css('background-color', 'red');
          document.valid = false;
        }
      }
    });
    console.log(document.valid);
    if (document.valid === true)
    {
    }
    else
    {
    }
    event.preventDefault();
  });
});
