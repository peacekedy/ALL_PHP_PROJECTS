<!DOCTYPE html>
<html>
    <head>
        <title>Transaction</title>
       <style>
           table{
            width: 100%;
            border-collapse: collapse;
            text-align: center;
           }

           table tr th, table tr td{
            padding: 5px;
            border: 1px #eee solid;
           }

           tfoot tr th, tfoot tr td{
            font-size: 20px;
           }

           tfoot tr th {
              text-align: right;
           }
       </style>
    </head>
    <body>
            <table>
                <thead>
                    <h1 color="green" align="center">THE TRANSACTION TABLE</h1>
                    <tr>
                      <th>Date</th>
                      <th>Check #</th>
                      <th>Description</th>
                      <th>Amount</th>
                      </tr>
                </thead>
                <tbody>
                    <!--YOUR CODE--->
                
                <?php if(! empty($transactions)): ?>
                <?php   foreach($transactions as $transaction): ?>
                    <tr>
                        <td><?= $transaction['date']?></td>
                        <td><?= $transaction['checkNumber']?></td>
                        <td><?= $transaction['desciption']?></td>
                        <td><?= $transaction['amount']?></td>
                        
                    </tr>
                    <?php endforeach?>
                    <?php endif ?>
            
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="3">Total Income:</th>
                    <td><?= $total['totalIncome']?></td>
                </tr>
                <tr>
                    <th colspan="3">Total expensive:</th>
                    <td><?= $total['totalExpense']?></td>
                </tr>

                <tr>
                    <th colspan="3">Net Income:</th>
                    <td><?= $total['netTotal']?></td>
                </tr>
            </tfoot>
            </table>
    </body>
</html>