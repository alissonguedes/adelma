<?php

namespace App\Models {

	use Illuminate\Database\Eloquent\Factories\HasFactory;
	use Illuminate\Database\Eloquent\Model;
	use Illuminate\Support\Facades\Route;

	class ModuloModel extends Model
	{

		use HasFactory;

		public function getModulos($id = null)
		{

			return $this->from('tb_acl_modulo')
			// ->where('status', '1')
				->orderBy('path', 'asc')
				->get();

		}

		public function getControllers($id_modulo = null)
		{

			return $this->from('tb_acl_modulo_controller')
				->where('id_modulo', $id_modulo)
			// ->where('status', '1')
				->get();

		}

		public function getRoutes($id = null, $id_parent = 0)
		{

			$routes = $this->from('tb_acl_modulo_routes')
				->where('id_controller', $id)
				->where('id_parent', $id_parent)
			// ->where('status', '1')
				->get();

			if ($routes->count() > 0) {

				foreach ($routes as $route) {

					$this->id_route         = $route->id;
					$this->id_controller    = $route->id_controller;
					$this->id_parent        = $route->id_parent;
					$this->type_route       = $route->type;
					$this->route            = $route->route;
					$this->controller_route = $route->controller;
					$this->action_route     = $route->action;
					$this->name_route       = $route->name;
					$this->filter_route     = $route->filter;
					$this->permissao_route  = $route->permissao;
					$this->restrict_route   = $route->restrict;

					$subroute = $this->from('tb_acl_modulo_routes')
						->where('id_parent', $this->id_route)
						->get();

					$type_route = $this->type_route;

					if ($subroute->count() === 0) {

						if (!empty($this->name_route)) {
							Route::$type_route($this->route, [$this->controller_route, $this->action_route])->name($this->name_route);
						} else {
							Route::$type_route($this->route, [$this->controller_route, $this->action_route]);
						}

					} else {
						Route::prefix($this->route)->group(function () {
							$this->getRoutes($this->id_controller, $this->id_route);
						});
					}

				}

			}

		}

		public function getIsRestrictModulo($modulo)
		{

			return $this->from('tb_acl_modulo')
				->where('path', $modulo)
				->where('restrict', 'yes')
				->get()
				->first() ? true : false;

		}

		public function getIsRestrictController($controller)
		{

			return $this->from('tb_acl_modulo_controller')
				->where('namespace', $controller)
				->where('restrict', 'yes')
				->get()
				->first() ? true : false;
		}

		public function getIsRestrictRoute($controller, $action, $name)
		{

			$this->name = $name;

			return $this->from('tb_acl_modulo_routes')
				->where('controller', $controller)
				->where('action', $action)
				->where(function ($where) {
					$where->orWhereNull('name')
						->orWhere('name', $this->name);
				})
				->where('restrict', 'yes')
				->get()
				->first() ? true : false;
		}

	}

}
