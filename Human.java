package jp.co.diworks.action;

public class Human {

	public static void main(String[] args){

		HumanName namae=new HumanName();
		System.out.println(namae.getName());

		HumanAge nenrei=new HumanAge();
		System.out.println(nenrei.getAge());

		HumanAddress zyuusyo =new HumanAddress();
		System.out.println(zyuusyo.getAddress());
	}
}
