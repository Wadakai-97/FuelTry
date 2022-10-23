DB::select('id', 'company_name')
										->from('companies')
										->execute()
										->as_array();