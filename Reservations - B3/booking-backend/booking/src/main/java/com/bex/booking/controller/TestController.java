package com.bex.booking.controller;

import org.springframework.security.access.prepost.PreAuthorize;
import org.springframework.web.bind.annotation.CrossOrigin;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RestController;

@CrossOrigin(origins = "*")
@RestController
@RequestMapping("/api/test")
public class TestController {
	@CrossOrigin(origins = "*")
	@GetMapping("/all")
	public String allAccess() {
		return "Public Content.";
	}
	@CrossOrigin(origins = "*")
	@GetMapping("/user")
	@PreAuthorize("hasRole('USER') or hasRole('RESIDENT') or hasRole('ADMIN')")
	public String userAccess() {
		return "User Content.";
	}
	@CrossOrigin(origins = "*")
	@GetMapping("/res")
	@PreAuthorize("hasRole('RESIDENT')")
	public String moderatorAccess() {
		return "Resident Board.";
	}
	@CrossOrigin(origins = "*")
	@GetMapping("/admin")
	@PreAuthorize("hasRole('ADMIN')")
	public String adminAccess() {
		return "Admin Board.";
	}
}
