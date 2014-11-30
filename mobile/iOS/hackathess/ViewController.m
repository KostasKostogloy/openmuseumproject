//
//  ViewController.m
//  hackathess
//
//  Created by Mario Shtika on 11/28/14.
//  Copyright (c) 2014 CodePendency. All rights reserved.
//

#import "ViewController.h"

@interface ViewController ()

@end

@implementation ViewController

- (void)viewDidLoad {
    [super viewDidLoad];

    UIWebView *webview = [[UIWebView alloc]initWithFrame:CGRectMake(0, 0, 1024,768)];
    NSString *url=@"http://178.62.230.206/";
    NSURL *nsurl=[NSURL URLWithString:url];
    NSURLRequest *nsrequest=[NSURLRequest requestWithURL:nsurl];
    [webview loadRequest:nsrequest];
    [self.view addSubview:webview];
}

- (void)didReceiveMemoryWarning {
    [super didReceiveMemoryWarning];
    // Dispose of any resources that can be recreated.
}

@end
