package com.Asos.Controller;

import java.util.List;
import java.util.Optional;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.DeleteMapping;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.PutMapping;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestMethod;
import org.springframework.web.bind.annotation.RequestParam;
import org.springframework.web.bind.annotation.ResponseBody;
import org.springframework.web.bind.annotation.RestController;
import org.springframework.web.servlet.ModelAndView;

import com.Asos.Model.Alein;
import com.Asos.Repo.AleinRepo;

@RestController
@RequestMapping("/api")
public class HomeController {
	@Autowired
	AleinRepo repo;
	
	@GetMapping("/")
	public ModelAndView home(Alein alein) {
		ModelAndView mv=new ModelAndView();
		mv.addObject("obj",alein);
		mv.setViewName("home");
		return mv;
	}
	
	@PostMapping("/addAlein")
	public String addAlein(Alein alein) {
		repo.save(alein);
		return "home";
	}
	@GetMapping("/getAlein")
	
	public List<Alein> getAlein(@RequestParam String tech) {
		
		System.out.println(tech);
		return repo.findByTech("Java");
		
	}
	@GetMapping("/getAll")
	@ResponseBody
	public  List<Alein> getall() {
		
		List<Alein> obj=repo.findAll();
		
		return obj;
	}
	@DeleteMapping("/delAlein/{aid}")
	@ResponseBody
	public List<Alein> deleteAlein(@PathVariable ("aid") int aid) {
		Alein a=repo.getOne(aid);
		repo.delete(a);
		System.out.println("successfully deleted");
		return repo.findAll();
	}
	

}
