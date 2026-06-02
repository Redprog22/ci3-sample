# CI3 메모장 샘플 프로젝트

WSL + Docker 환경에서 CodeIgniter 3로 만든 간단한 메모 CRUD 예제입니다.  
> 개발 환경 세팅이 안 되어 있다면 [WSL + Docker 개발 환경 세팅 가이드](https://github.com/Redprog22/dev-setup-guide) 를 먼저 참고하세요.

---

## 기술 스택

| 항목 | 내용 |
|------|------|
| Framework | CodeIgniter 3.1.13 |
| Language | PHP 8.1 |
| Database | MySQL 8.0 |
| Server | Apache |
| 실행 환경 | Docker |

---

## 프로젝트 구조

```
ci3-sample/
├── docker/
│   ├── Dockerfile      # PHP + Apache 이미지 설정
│   ├── apache.conf     # Apache 가상호스트 설정
│   └── init.sql        # DB 초기화 (테이블 생성 + 샘플 데이터)
├── application/
│   ├── controllers/
│   │   └── Memo.php       # 메모 컨트롤러
│   ├── models/
│   │   └── Memo_model.php # 메모 모델
│   └── views/
│       └── memo/
│           └── index.php  # 메모 뷰
├── system/             # CI3 코어 (수정 금지)
├── docker-compose.yml
└── .htaccess
```

---

## 실행 방법

### 1. 프로젝트 clone

WSL 터미널에서 실행합니다.

```bash
cd ~/projects
git clone https://github.com/Redprog22/ci3-sample.git
cd ci3-sample
```

### 2. 컨테이너 시작

```bash
docker compose up -d
```

처음 실행 시 Docker 이미지를 빌드하므로 1~2분 정도 걸립니다.

### 3. 접속

브라우저에서 아래 주소로 접속합니다.

```
http://localhost:8090
```

---

## 기능

- 메모 목록 조회
- 메모 추가
- 메모 삭제

---

## 포트 정보

| 서비스 | 포트 |
|--------|------|
| PHP/Apache (웹) | 8090 |
| MySQL | 3310 |

---

## 컨테이너 종료

```bash
docker compose down
```

DB 데이터까지 초기화하려면:

```bash
docker compose down -v
```
