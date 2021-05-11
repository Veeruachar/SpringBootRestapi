package com.Asos.Model;

import javax.persistence.Entity;
import javax.persistence.Id;

@Entity
public class Alein {
	@Id
	private int aid;
	private String aname;
	private String tech;
	public Alein() {
	}
	@Override
	public String toString() {
		return "Alein [aid=" + aid + ", aname=" + aname + ", tech=" + tech + "]";
	}
	public Alein(int aid, String aname, String tech) {
		super();
		this.aid = aid;
		this.aname = aname;
		this.tech = tech;
	}
	public int getAid() {
		return aid;
	}
	public void setAid(int aid) {
		this.aid = aid;
	}
	public String getAname() {
		return aname;
	}
	public void setAname(String aname) {
		this.aname = aname;
	}
	public String getTech() {
		return tech;
	}
	public void setTech(String tech) {
		this.tech = tech;
	}
	
}
