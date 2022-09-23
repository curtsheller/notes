# LearningUkulele.com (157.245.82.239)

Keep the DNS for your domain hosted elsewhere, and just set the MX records for your domain to point to us. Use these values for your MX records:

You can only use one email server to receive messages for a given domain name. When it's a domain configured in your Mailgun account, it could be either Mailgun or Google/other servers, but not both.

## FastMail
- MX: in1-smtp.messagingengine.com. 10
- MX: in2-smtp.messagingengine.com. 20

## MailGun
- MX: mg.learningukulele.com, mxa.mailgun.org 10
- MX: mg.learningukulele.com, mxb.mailgun.org 10

# CurtSheller.com (157.245.82.239)

## curtsheller.com, funkyfrets.com (174.138.45.236)

- MX: curtsheller.com VALUE: mail handled by: in1-smtp.messagingengine.com. 10
- MX: in2-smtp.messagingengine.com. 20

- TXT: v=spf1 include:spf.messagingengine.com ?all (curtsheller.com)

### FastMail
- CNAME: fm1.curtsheller.com.dkim.fmhosted.com.
- CNAME: fm3.curtsheller.com.dkim.fmhosted.com.
- CNAME: fm3.curtsheller.com.dkim.fmhosted.com.

- CNAME: *.curtsheller.com is an alias of curtsheller.com.
- CNAME: www.curtsheller.com is an alias of curtsheller.com.

- A: curtheller.com directs to 157.245.82.239

- NS servers> ns1., ns2., ns2.digitalocean
