<nav class="navbar navbar-expand-lg navbar-light navbar-laravel" style="background-color: #228B22; border-color: #228B22;">
	<div class="container">
		<a class="navbar-brand" id="color">Sistema de Questionários IFSUL</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto">
							<li class="nav-item">
									<a class="nav-link" href="<?php echo base_url('menu')?>" id="color">Voltar</a>
							</li>
					</ul>
			</div>
	</div>
</nav>
<main class="forms-form" id="color">
    <div class="cotainer" >
        <div class="row justify-content-center" >
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header" style="background-color: #228B22; border-color:#228B22">Respostas dos Usuários</div>
                    	<div class="card-body">
                        <form action="<?php echo base_url('responder/respostas_view')?>" method="POST">
													<div id="color2"><?php echo validation_errors('<p>','</p>'); ?></div>
														<?php if($this->session->flashdata('msg')): ?>
														<?php $alert = $this->session->flashdata('msg')['alert'];?>
														<?php $mensagem = $this->session->flashdata('msg')['mensagem'];?>
														<div class="alert alert-<?php echo($alert);?> alert-dismissible fade show" role="alert">
															  <strong><?php echo($mensagem); ?></strong>
														</div>
													<?php endif; ?>
													<a href="<?php echo base_url("responder/selecionar")?>" style=" margin-top: 2px; margin-left: 290px; margin-right: 5px;" class="btn btn-success btn-sm">Selecionar Questionário</a>
													<table class="table table-hover" id="tabela">
	  											<thead>
		    								<tr>
												<th scope="col">Questionário</th>
											    <th scope="col">Pergunta</th>
												<th scope="col">Opção Escolhida</th>
												<th scope="col">Resposta Dissertativa</th>
												<th scope="col">Nome do Aluno</th>
										    </tr>
									  </thead>
									  <tbody>
									  		<?php foreach ($questionario as $linha):?>
											    <tr>
												     <th scope="row"><?= $linha->nm_questionario ?></th>
												     <td><?= $linha->pr_pergunta?></td>
													 <td><?= $linha->ds_opcao?></td>
													 <td><?= $linha->respostas?></td>
													<td><?= $linha->nm_usuario?></td>
											    </tr>
											<?php endforeach; ?>
									  </tbody>
								</table>
