--
-- PostgreSQL database dump
--

-- Dumped from database version 10.3 (Debian 10.3-1.pgdg90+1)
-- Dumped by pg_dump version 10.1

-- Started on 2018-04-26 12:51:25

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;
SET row_security = off;

--
-- TOC entry 32 (class 2615 OID 43567)
-- Name: communicatiephp; Type: SCHEMA; Schema: -; Owner: r0670805
--

CREATE SCHEMA communicatiephp;


ALTER SCHEMA communicatiephp OWNER TO r0670805;

SET search_path = communicatiephp, pg_catalog;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- TOC entry 339 (class 1259 OID 43570)
-- Name: users; Type: TABLE; Schema: communicatiephp; Owner: r0670805
--

CREATE TABLE users (
    userid integer NOT NULL,
    firstname character varying(128),
    lastname character varying(128),
    password character varying(128)
);


ALTER TABLE users OWNER TO r0670805;

--
-- TOC entry 338 (class 1259 OID 43568)
-- Name: users_userid_seq; Type: SEQUENCE; Schema: communicatiephp; Owner: r0670805
--

CREATE SEQUENCE users_userid_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE users_userid_seq OWNER TO r0670805;

--
-- TOC entry 3516 (class 0 OID 0)
-- Dependencies: 338
-- Name: users_userid_seq; Type: SEQUENCE OWNED BY; Schema: communicatiephp; Owner: r0670805
--

ALTER SEQUENCE users_userid_seq OWNED BY users.userid;


--
-- TOC entry 3380 (class 2604 OID 43573)
-- Name: users userid; Type: DEFAULT; Schema: communicatiephp; Owner: r0670805
--

ALTER TABLE ONLY users ALTER COLUMN userid SET DEFAULT nextval('users_userid_seq'::regclass);


--
-- TOC entry 3509 (class 0 OID 43570)
-- Dependencies: 339
-- Data for Name: users; Type: TABLE DATA; Schema: communicatiephp; Owner: r0670805
--

COPY users (userid, firstname, lastname, password) FROM stdin;
1	User1	User	U
\.


--
-- TOC entry 3517 (class 0 OID 0)
-- Dependencies: 338
-- Name: users_userid_seq; Type: SEQUENCE SET; Schema: communicatiephp; Owner: r0670805
--

SELECT pg_catalog.setval('users_userid_seq', 1, true);


--
-- TOC entry 3382 (class 2606 OID 43575)
-- Name: users userpk; Type: CONSTRAINT; Schema: communicatiephp; Owner: r0670805
--

ALTER TABLE ONLY users
    ADD CONSTRAINT userpk PRIMARY KEY (userid);


--
-- TOC entry 3514 (class 0 OID 0)
-- Dependencies: 32
-- Name: communicatiephp; Type: ACL; Schema: -; Owner: r0670805
--

GRANT ALL ON SCHEMA communicatiephp TO r0619834;
GRANT ALL ON SCHEMA communicatiephp TO r0663200;


--
-- TOC entry 3515 (class 0 OID 0)
-- Dependencies: 339
-- Name: users; Type: ACL; Schema: communicatiephp; Owner: r0670805
--

GRANT ALL ON TABLE users TO r0619834;
GRANT ALL ON TABLE users TO r0663200;


-- Completed on 2018-04-26 12:51:26

--
-- PostgreSQL database dump complete
--

