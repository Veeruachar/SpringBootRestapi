package com.Asos.Repo;

import java.util.List;

import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.data.repository.CrudRepository;

import com.Asos.Model.Alein;

public interface AleinRepo extends JpaRepository<Alein,Integer>{

     List<Alein> findByTech(String tech);
     List<Alein> getAll();
	

}
