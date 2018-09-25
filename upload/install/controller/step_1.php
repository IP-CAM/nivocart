<?php
class ControllerStep1 extends Controller {

	public function index() {
		if ($this->request->server['REQUEST_METHOD'] == 'POST') {
			$this->response->redirect($this->url->link('step_2'));
		}

		$this->document->setTitle($this->language->get('heading_step_1'));

		$this->data['heading_step_1'] = $this->language->get('heading_step_1');

		$this->data['text_terms'] = $this->language->get('text_terms');

		$this->data['button_continue'] = $this->language->get('button_continue');

		$this->data['action'] = $this->url->link('step_1');

		$this->template = 'step_1.tpl';
		$this->children = array(
			'header',
			'footer'
		);

		$this->response->setOutput($this->render());
	}
}
