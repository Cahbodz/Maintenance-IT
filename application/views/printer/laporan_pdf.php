<?php
            $pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
            $pdf->SetTitle('Daftar Produk');
            $pdf->SetHeaderMargin(30);
            $pdf->SetTopMargin(20);
            $pdf->setFooterMargin(20);
            $pdf->SetAutoPageBreak(true);
            $pdf->SetAuthor('Author');
            $pdf->SetDisplayMode('real', 'default');
            $pdf->AddPage();
             
            $html='<h3>Daftar Produk</h3>
            <div class="card-body p-0">
                    <table border="1px" bgcolor="#666666" cellpadding="3">
                        <tr bgcolor="#ffffff">
                            <td width="15%" align="center">Merek</td>
                            <th width="35%" align="center">Model</th>
                            <th width="15%" align="center">Ip erver</th>
                            <th width="15%" align="center">Multifungsi</th>
                            <th width="15%" align="center">Pilihan warna</th>
                        </tr>';
                  
          	$html.='       <tr bgcolor="#ffffff">
          					<td>'.$marek.'</td>
          					<td>'.$model.'</td>
          					<td>'.$ip_server.'</td>
          					<td>'.$multifungsi.'</td>
          					<td>'.$pilihan_warna.'</td>
                        </tr>';
                    
            $html.='</table>';

            $pdf->writeHTML($html, true, false, true, false, '');
            $pdf->Output('daftar_produk.pdf', 'I');
            $html.='?>';